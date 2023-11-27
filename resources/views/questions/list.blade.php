@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Fix Exam For Student</h5>
                </div>
            </div>
        </div>
    </div>
    @include('components.form-alert')


    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Question information</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                {{-- <th class="text-900 sort">Q - ID</th> --}}
                                <th class="text-900 sort">QTN - ID</th>
                                <th class="text-900 sort">Q - Status</th>
                                <th class="text-900 sort">Cleas</th>
                                <th class="text-900 sort">Subject</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">T - Q</th>
                                <th class="text-900 sort">A.Mark</th>
                                <th class="text-900 sort">T.Mark</th>
                                <th class="text-900 sort">Time</th>
                                <th class="text-900 sort">Preview</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{ $question->question_id }}</td>
                                    <td>{{ $question->question_status }}</td>
                                    <td>{{ $question->class }}</td>
                                    <td>{{ $question->subject }}</td>
                                    <td>{{ $question->term }}</td>
                                    <td>{{ $question->session }}</td>
                                    <td>{{ $question->total_question }}</td>
                                    <td>{{ $question->alloted_mark }}</td>
                                    <td>{{ $question->total_mark }}</td>
                                    <td>{{ $question->time_minutes . ' Minutes' }} </td>
                                    <td>{{ $question->question_pdf }} </td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/questions/{{ $question->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/questions/{{ $question->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-link p-0 ms-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><span
                                                            class="text-500 fas fa-trash-alt"></span></button>
                                                </form>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Fix Exam</h6>
                </div>
                <div class="card-body">
                    @foreach ($QuestionCode as $code)
                        <form action="/questions/{{ $code->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <!-- Form -->

                            <div class="row mb-4">
                                @include('components.form-fields-question', [
                                    'name' => 'Exam_ID',
                                    'label' => 'Exam ID',
                                    'value' => $code->Exam_ID,
                                ])
                            </div>
                            <div class="row mb-4 gy-3">
                                @include('components.form-fields-exam-code', [
                                    'name' => 'Pry1',
                                    'label' => 'Pry1',
                                    'value' => $code->Pry1,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'Pry2',
                                    'label' => 'Pry2',
                                    'value' => $code->Pry2,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'Pry3',
                                    'label' => 'Pry3',
                                    'value' => $code->Pry3,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'Pry4',
                                    'label' => 'Pry4',
                                    'value' => $code->Pry4,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'Pry5',
                                    'label' => 'Pry5',
                                    'value' => $code->Pry5,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'Pry6',
                                    'label' => 'Pry6',
                                    'value' => $code->Pry6,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'JSS1',
                                    'label' => 'JSS1',
                                    'value' => $code->JSS1,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'JSS2',
                                    'label' => 'JSS2',
                                    'value' => $code->JSS2,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'JSS3',
                                    'label' => 'JSS3',
                                    'value' => $code->JSS3,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'SS1',
                                    'label' => 'SS1',
                                    'value' => $code->SS1,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'SS2',
                                    'label' => 'SS2',
                                    'value' => $code->SS2,
                                ])
                                @include('components.form-fields-exam-code', [
                                    'name' => 'SS3',
                                    'label' => 'SS3',
                                    'value' => $code->SS3,
                                ])
                            </div>
                            @include('components.button', ['label' => 'Submit'])
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
