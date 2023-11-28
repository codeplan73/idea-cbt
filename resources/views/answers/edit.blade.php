@extends('layouts.app')

@section('content')
    @include('components.form-header', ['title' => 'Edit Student Answer'])
    @include('components.form-alert')

    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Answers</h6>
                </div>
                <div class="card-body">
                    <form action="/answers/{{ $answer->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <!-- Form -->
                        <div class="row">
                            @include('components.form-fields-answer', [
                                'name' => 'name',
                                'label' => 'Name',
                                'value' => $answer->student_id,
                                ['readonly' => true],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'name',
                                'label' => 'Name',
                                'value' => $answer->name,
                                ['readonly' => true],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'class',
                                'label' => 'Class',
                                'value' => $answer->class,
                                ['readonly' => true],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'term',
                                'label' => 'Term',
                                'value' => $answer->term,
                                ['readonly' => true],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'subject',
                                'label' => 'Subject',
                                'value' => $answer->subject,
                                ['readonly' => true],
                            ])

                            @include('components.form-fields-answer', [
                                'name' => 'question_type',
                                'label' => 'Question Type',
                                'value' => $answer->question_type,
                                ['readonly' => true],
                            ])

                            @include('components.form-fields-answer', [
                                'name' => 'exam_type',
                                'label' => 'Exam Type',
                                'value' => $answer->exam_type,
                                ['readonly' => false],
                            ])

                            @include('components.form-fields-answer', [
                                'name' => 'score',
                                'label' => 'Score',
                                'value' => $answer->score,
                                ['readonly' => false],
                            ])

                            <div class="mt-4">
                                @include('components.button', ['label' => 'Submit'])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
