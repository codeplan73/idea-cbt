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
                                'name' => 'test1',
                                'label' => 'Test-1',
                                'value' => $answer->test1,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'test2',
                                'label' => 'Test-2',
                                'value' => $answer->test2,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'test3',
                                'label' => 'Test-3',
                                'value' => $answer->test3,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'exam',
                                'label' => 'Exam',
                                'value' => $answer->exam,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'test1_score',
                                'label' => 'Test-1 Score',
                                'value' => $answer->test1_score,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'test2_score',
                                'label' => 'Test-2 Score',
                                'value' => $answer->test2_score,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'test3_score',
                                'label' => 'Test-3 Score',
                                'value' => $answer->test3_score,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'exam_score',
                                'label' => 'Exam Score',
                                'value' => $answer->exam_score,
                                ['readonly' => false],
                            ])
                            @include('components.form-fields-answer', [
                                'name' => 'total',
                                'label' => 'Total Score',
                                'value' => $answer->total,
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
