@extends('layouts.app')

@section('content')
    @include('components.form-header', ['title' => 'Edit Question'])
    @include('components.form-alert')

    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Questions</h6>
                </div>
                <div class="card-body">
                    <form action="/questions/{{ $question->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Form -->
                        <div class="row">
                            @include('components.form-fields-question', [
                                'name' => 'subject_teacher',
                                'label' => 'Teacher',
                                'value' => $question->subject_teacher,
                            ])

                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_type" class="form-label">Question Type</label>
                                    <select class="js-select form-select @error('question_type') is-invalid @enderror"
                                        name="question_type">
                                        <option value="{{ $question->question_type }}">{{ $question->question_type }}
                                        </option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->question_type))
                                                <option value="{{ $sys->question_type }}">{{ $sys->question_type }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('question_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="exam_type" class="form-label">Exam Type</label>
                                    <select class="js-select form-select @error('exam_type') is-invalid @enderror"
                                        name="exam_type">
                                        <option value="{{ $question->exam_type }}">{{ $question->exam_type }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->exam_type))
                                                <option value="{{ $sys->exam_type }}">{{ $sys->exam_type }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('exam_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="class" class="form-label">Class</label>
                                    <select class="js-select form-select @error('class') is-invalid @enderror"
                                        name="class">
                                        <option value="{{ $question->class }}">{{ $question->class }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->class))
                                                <option value="{{ $sys->class }}">{{ $sys->class }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('class')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="js-select form-select @error('subject') is-invalid @enderror"
                                        name="subject">
                                        <option value="{{ $question->subject }}">{{ $question->subject }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->subject))
                                                <option value="{{ $sys->subject }}">{{ $sys->subject }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="term" class="form-label">Term</label>
                                    <select class="js-select form-select @error('term') is-invalid @enderror"
                                        name="term">
                                        <option value="{{ $question->term }}">{{ $question->term }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->term))
                                                <option value="{{ $sys->term }}">{{ $sys->term }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('term')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="session" class="form-label">Session</label>
                                    <select class="js-select form-select @error('session') is-invalid @enderror"
                                        name="session">
                                        <option value="{{ $question->session }}">{{ $question->session }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->session))
                                                <option value="{{ $sys->session }}">{{ $sys->session }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('session')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            @include('components.form-fields-question', [
                                'name' => 'total_question',
                                'label' => 'Total Question',
                                'value' => $question->total_question,
                            ])
                            @include('components.form-fields-question', [
                                'name' => 'alloted_mark',
                                'label' => 'Alloted Mark',
                                'value' => $question->alloted_mark,
                            ])
                            @include('components.form-fields-question', [
                                'name' => 'total_mark',
                                'label' => 'Total Mark',
                                'value' => $question->total_mark,
                            ])

                            @include('components.form-fields-question', [
                                'name' => 'time_minutes',
                                'label' => 'Time (Minutes)',
                                'value' => $question->time_minutes,
                            ])
                        </div>

                        <div class="row my-4 gx-5 gy-3">
                            @include('components.form-fields-question-option', [
                                'name' => 'q1',
                                'label' => 'Question 1',
                                'value' => $question->q1,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q2',
                                'label' => 'Question 2',
                                'value' => $question->q1,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q3',
                                'label' => 'Question 3',
                                'value' => $question->q3,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q4',
                                'label' => 'Question 4',
                                'value' => $question->q4,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q5',
                                'label' => 'Question 5',
                                'value' => $question->q5,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q6',
                                'label' => 'Question 6',
                                'value' => $question->q6,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q7',
                                'label' => 'Question 7',
                                'value' => $question->q7,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q8',
                                'label' => 'Question 8',
                                'value' => $question->q8,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q9',
                                'label' => 'Question 9',
                                'value' => $question->q9,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q10',
                                'label' => 'Question 10',
                                'value' => $question->q10,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q11',
                                'label' => 'Question 11',
                                'value' => $question->q11,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q12',
                                'label' => 'Question 12',
                                'value' => $question->q12,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q13',
                                'label' => 'Question 13',
                                'value' => $question->q13,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q14',
                                'label' => 'Question 14',
                                'value' => $question->q14,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q15',
                                'label' => 'Question 15',
                                'value' => $question->q15,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q16',
                                'label' => 'Question 16',
                                'value' => $question->q16,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q17',
                                'label' => 'Question 17',
                                'value' => $question->q17,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q18',
                                'label' => 'Question 18',
                                'value' => $question->q18,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q19',
                                'label' => 'Question 19',
                                'value' => $question->q19,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q20',
                                'label' => 'Question 20',
                                'value' => $question->q20,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q21',
                                'label' => 'Question 21',
                                'value' => $question->q21,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q22',
                                'label' => 'Question 22',
                                'value' => $question->q22,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q23',
                                'label' => 'Question 23',
                                'value' => $question->q23,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q24',
                                'label' => 'Question 24',
                                'value' => $question->q24,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q25',
                                'label' => 'Question 25',
                                'value' => $question->q25,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q26',
                                'label' => 'Question 26',
                                'value' => $question->q26,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q27',
                                'label' => 'Question 27',
                                'value' => $question->q27,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q28',
                                'label' => 'Question 28',
                                'value' => $question->q28,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q29',
                                'label' => 'Question 29',
                                'value' => $question->q29,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q30',
                                'label' => 'Question 30',
                                'value' => $question->q30,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q31',
                                'label' => 'Question 31',
                                'value' => $question->q31,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q32',
                                'label' => 'Question 32',
                                'value' => $question->q32,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q33',
                                'label' => 'Question 33',
                                'value' => $question->q33,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q34',
                                'label' => 'Question 34',
                                'value' => $question->q34,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q35',
                                'label' => 'Question 35',
                                'value' => $question->q35,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q36',
                                'label' => 'Question 36',
                                'value' => $question->q36,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q37',
                                'label' => 'Question 37',
                                'value' => $question->q37,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q38',
                                'label' => 'Question 38',
                                'value' => $question->q38,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q39',
                                'label' => 'Question 39',
                                'value' => $question->q39,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q40',
                                'label' => 'Question 40',
                                'value' => $question->q40,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q41',
                                'label' => 'Question 41',
                                'value' => $question->q41,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q42',
                                'label' => 'Question 42',
                                'value' => $question->q42,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q43',
                                'label' => 'Question 43',
                                'value' => $question->q43,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q44',
                                'label' => 'Question 44',
                                'value' => $question->q44,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q45',
                                'label' => 'Question 45',
                                'value' => $question->q45,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q46',
                                'label' => 'Question 46',
                                'value' => $question->q46,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q47',
                                'label' => 'Question 47',
                                'value' => $question->q47,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q48',
                                'label' => 'Question 48',
                                'value' => $question->q48,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q49',
                                'label' => 'Question 49',
                                'value' => $question->q49,
                            ])
                            @include('components.form-fields-question-option', [
                                'name' => 'q50',
                                'label' => 'Question 50',
                                'value' => $question->q50,
                            ])
                            @include('components.file-upload-preview-question')

                            <div class="col-12 mb-2">
                                <label for="question_pdf" class="form-label">PDF Preview</label>

                                <embed src="{{ url('storage/' . $question->question_pdf) }}" type="application/pdf"
                                    width="100%" height="200px" />

                            </div>

                            @include('components.button', ['label' => 'Submit'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
