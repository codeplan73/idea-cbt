@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Question Management</h5>
                </div>
                <div class="col-auto">
                    <a href="/question-create" class="btn btn-primary" role="button">Set Question</a>
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
                                <th class="text-900 sort">Q - ID</th>
                                <th class="text-900 sort">Subject</th>
                                <th class="text-900 sort">Cleas</th>
                                <th class="text-900 sort">Test</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Preview</th>
                                {{-- <th class="text-900 sort">Q - Status</th> --}}
                                <th class="text-900 sort">T - Q</th>
                                <th class="text-900 sort">T.Mark</th>
                                <th class="text-900 sort">A.Mark</th>
                                <th class="text-900 sort">Time</th>
                                <th class="text-900 sort">E.Time</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>{{ $question->question_id }}</td>
                                    <td>{{ $question->subject }}</td>
                                    <td>{{ $question->class }}</td>
                                    <td>{{ $question->exam_type }}</td>
                                    <td>{{ $question->term }}</td>
                                    <td>{{ $question->question_pdf }} </td>
                                    {{-- <td>{{ $question->question_status }}</td> --}}
                                    <td>{{ $question->total_question }}</td>
                                    <td>{{ $question->total_mark }}</td>
                                    <td>{{ $question->alloted_mark }}</td>
                                    <td>{{ $question->time_minutes . ' Minutes' }} </td>
                                    <td>{{ $question->end_time }} </td>
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
@endsection
