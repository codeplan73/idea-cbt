@extends('layouts.app_student')

@section('content')
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Exam Page!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif

    <div class="content">
        <div class="row">
            <div class="card card-body mb-3">
                <div class="row d-flex gap-0 align-items-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <h6><span class="fw-bold text-primary">ID:</span>
                                    {{ Auth::guard('student')->user()->Student_ID }}</h6>
                                <h6><span class="fw-bold text-primary">Name:</span>
                                    {{ Auth::guard('student')->user()->Fullnames }}</h6>
                                <h6><span class="fw-bold text-primary">Class:</span>
                                    {{ Auth::guard('student')->user()->Student_Class }}</h6>
                                <h6><span class="fw-bold text-primary">Term:</span> {{ $question->term }}</h6>
                                <h6><span class="fw-bold text-primary">Session:</span> {{ $question->session }}
                                </h6>
                            </div>
                            <hr>
                            <div class="col-md-12 d-flex gap-3 justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Exam-ID: </h6>
                                    <h6>{{ $question->question_id }}</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Subject:</h6>
                                    <h6>{{ $question->subject }}</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">E-type:</h6>
                                    <h6>{{ $question->exam_type }}</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">T-Question:</h6>
                                    <h6>{{ $question->total_question }}</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">T-Mark:</h6>
                                    <h6>{{ $question->total_mark }}</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12 d-flex gap-3 justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Test1: </h6>
                                    <h6>0</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Test2:</h6>
                                    <h6>0</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Test3:</h6>
                                    <h6>0</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Exam:</h6>
                                    <h6>0</h6>
                                </div>
                                <div class="d-flex gap-2">
                                    <h6 class="fw-bold text-primary">Total:</h6>
                                    <h6>0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <img class="circle" style="border-radius: 50%;" src="{{ asset('assets/profile/profile.jpg') }}"
                            alt="" width="80" height="80" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-lg-4 col-md-4 order-md-last order-sm-first">
                <div class="card h-100">
                    {{-- <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                        <h6 class="mb-0">Timer Section</h6>

                    </div> --}}
                    <div class="card-body">
                        <div class="row g-3 h-100">
                            <div class="col-sm-12 col-lg-12">
                                <div class="card position-relative rounded-4">
                                    <div class="card-body p-3 pt-xxl-4">
                                        <h2 id="timer" class="text-center fw-bold"></h2>
                                        <h5 class="text-center">Alloted Time: {{ $question->time_minutes }} Min</h6>
                                            <hr>
                                            <h5 class="text-center">Total Questions: {{ $question->total_question }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 order-md-first order-sm-last">
                <div class="card h-100">
                    <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                        <h6 class="mb-0">Exam Question Board</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 h-100">
                            <div class="col-md-12 col-lg-12">
                                <div class="card position-relative rounded-4">
                                    <iframe src="{{ url('storage/' . $question->question_pdf) }}" width="100%"
                                        height="300px"></iframe>
                                </div>
                            </div>


                            {{-- <div class="col-md-12 col-lg-12">
                                <div class="row gx-3">
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" id="prevBtn">Prev</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-4" id="optionsContainer"
                                        data-total-questions="{{ $question->total_question }}">
                                        <div class="d-flex justify-content-between mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer" id="a"
                                                    value="a">
                                                <label class="form-check-label" for="a">A</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer" id="b"
                                                    value="b">
                                                <label class="form-check-label" for="b">B</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer" id="c"
                                                    value="c">
                                                <label class="form-check-label" for="c">C</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="answer"
                                                    id="d" value="d">
                                                <label class="form-check-label" for="d">D</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" id="nextBtn">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}




                            {{-- <form action="{{}}" method="post"></form> --}}
                            <div class="col-md-12 col-lg-12">
                                <div class="row gx-3">
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" id="prevBtn">Prev</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-4" id="optionsContainer"
                                        data-total-questions="{{ $question->total_question }}">
                                        <div class="d-flex justify-content-between mt-3" id="options">
                                            <!-- Options will be dynamically populated here -->
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" id="nextBtn">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-3 col-sm-4">
                                <div class="mt-3">
                                    <input type="text" class="form-control" id="questionNumber" readonly>
                                </div>
                            </div>

                            <div id="questionFields" class="row mb-4 gx-5 gy-3">
                                <!-- Text fields for questions will be appended here -->
                            </div>

                            <div class="col-sm-6 col-md-3 mb-4 mb-sm-0">
                                <label for="total_question" class="form-label text-center">Number of Questions:</label>
                                <input type="number" class="form-control text-center"
                                    value={{ $question->total_question }} id="total_question" name="total_question"
                                    maxlength="2" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        // Retrieve the total number of questions from the database
        var totalQuestions = parseInt(document.getElementById('optionsContainer').getAttribute('data-total-questions'));
        var currentQuestion = 1; // Current question number, starting from 1
        var selectedOption = null; // Variable to store the selected option

        // Options for the questions
        var options = ['A', 'B', 'C', 'D'];

        // Function to populate options based on current question number
        function populateOptions(questionNumber) {
            var optionsHtml = '';
            for (var i = 0; i < options.length; i++) {
                var optionId = options[i].toLowerCase();
                optionsHtml += '<div class="form-check">';
                optionsHtml += '<input class="form-check-input" type="radio" name="answer" id="' + optionId + '" value="' +
                    optionId + '">';
                optionsHtml += '<label class="form-check-label" for="' + optionId + '">' + options[i] + '</label>';
                optionsHtml += '</div>';
            }
            document.getElementById('options').innerHTML = optionsHtml;

            // Set the state of radio button based on previously selected answer (if any)
            var selectedRadio = document.getElementById(selectedOption);
            if (selectedRadio) {
                selectedRadio.checked = true;
            }

            // Set the current question number in the textbox
            document.getElementById('questionNumber').value = 'Question ' + questionNumber;

            // Enable/disable Next and Prev buttons based on current question number
            document.getElementById('nextBtn').disabled = (questionNumber === totalQuestions);
            document.getElementById('prevBtn').disabled = (questionNumber === 1);
        }

        // Initial population of options for the first question
        populateOptions(currentQuestion);

        // Event listener for Next button
        document.getElementById('nextBtn').addEventListener('click', function() {
            selectedOption = document.querySelector('input[name="answer"]:checked').id;
            if (currentQuestion < totalQuestions) {
                currentQuestion++;
                populateOptions(currentQuestion);
            } else {
                alert('You have reached the last question options.');
                // You can add additional logic or redirect the user when they reach the last question options.
            }
        });

        // Event listener for Prev button
        document.getElementById('prevBtn').addEventListener('click', function() {
            selectedOption = document.querySelector('input[name="answer"]:checked').id;
            if (currentQuestion > 1) {
                currentQuestion--;
                populateOptions(currentQuestion);
            }
        });
    </script>

    <script>
        // JavaScript logic for countdown timer
        let timeLeft = {{ $question->time_minutes }} * 60; // Convert minutes to seconds
        const timerElement = document.getElementById('timer');

        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            if (timeLeft === 0) {
                // Submit the question and update the score
                submitAnswer();
            } else {
                timeLeft--;
            }
        }

        const timerInterval = setInterval(updateTimer, 1000);

        function submitAnswer() {
            // Logic to get user-selected answer and send it to the server using AJAX
            // Update score and display correct answers
            clearInterval(timerInterval);
        }
    </script>
@endsection
