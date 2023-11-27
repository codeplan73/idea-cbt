@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Set Question</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'E-Note Dublicate!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif

    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Questions</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('question.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Form -->
                        <div class="row mb-4 gx-5 gy-3">
                            @include('components.form-fields-question', [
                                'name' => 'subject_teacher',
                                'label' => 'Teacher',
                            ])

                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_type" class="form-label">Question Type</label>
                                    <select class="js-select form-select @error('question_type') is-invalid @enderror"
                                        name="question_type">
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

                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <label for="total_question" class="form-label text-center">Number of Questions:</label>
                                <input type="number" class="form-control text-center" id="total_question"
                                    name="total_question" maxlength="2">
                            </div>

                            @include('components.form-fields-question', [
                                'name' => 'alloted_mark',
                                'label' => 'Alloted Mark',
                            ])

                            @include('components.form-fields-question', [
                                'name' => 'total_mark',
                                'label' => 'Total Mark',
                            ])

                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="time_minutes" class="form-label">Time (Minutes)</label>
                                    <input type="number" class="form-control @error('time_minutes') is-invalid @enderror"
                                        name="time_minutes" id="minutes" maxlength="2" required step="1">

                                    @error('time_minutes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div id="questionFields" class="row mb-4 gx-5 gy-3">
                            <!-- Text fields for questions will be appended here -->
                        </div>

                        @include('components.file-upload-preview-question')

                        <div class="">
                            <button type="submit" class="btn btn-info btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .capitalize-text {
            text-transform: uppercase;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            // Attach input event listener to the total_question input field
            $('#total_question').on('input', function() {
                // Get the number of questions from the input field
                var total_question = parseInt($(this).val());

                // Clear existing question fields
                $('#questionFields').empty();

                // Show only the required number of question fields
                for (var i = 1; i <= total_question; i++) {
                    var questionField = $('<div class="col-md-2 col-sm-6 col-xs-6">');
                    var label = $('<label class="form-label" for="question' + i + '">').text('Question ' +
                        i);
                    var input = $(
                            '<input type="text" class="form-control text-center capitalize-text" maxlength="1" required>'
                        )
                        .attr('id',
                            'question' + i)
                        .attr('name', 'q' + i);

                    questionField.append(label);
                    questionField.append(input);

                    $('#questionFields').append(questionField);
                }
            });
        });
    </script>
@endsection
