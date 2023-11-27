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

    @if ($question->question_type == 'Objective')
        <div>
            <div class="content">
                <div class="row g-3 mb-3">
                    <div class="col-lg-4 col-md-4 order-md-last order-sm-first">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row g-3 h-100">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="card position-relative rounded-4">
                                            <div class="card-body p-3 pt-xxl-4">
                                                <h2 id="timer" class="text-center fw-bold"></h2>
                                                <h5 class="text-center">Allotted Time: {{ $question->time_minutes }} Min
                                                    </h6>
                                                    <hr>
                                                    <h5 class="text-center">Total Questions: {{ $question->total_question }}
                                                    </h5>
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

                                    <form id="quizForm" action="/exam/{{ $question->id }}" method="post">
                                        @csrf
                                        @method('PUT')
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

                                            <input type="hidden" name="selectedOptions" id="selectedOptionsInput">
                                            <input type="hidden" name="score" id="scoreInput">

                                            <div class="mt-3">
                                                <input type="text" class="form-control" id="questionNumber" readonly>
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn btn-info" id="submitButton">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <input type="text" value="" id="totalScore">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="answerContainer">
                <input type="hidden" value="{{ $question->alloted_mark }}" id="mark">
                <input type="text" value="{{ $question->q1 }}" id="ans1">
                <input type="text" value="{{ $question->q2 }}" id="ans2">
                <input type="text" value="{{ $question->q3 }}" id="ans3">
                <input type="text" value="{{ $question->q4 }}" id="ans4">
                <input type="text" value="{{ $question->q5 }}" id="ans5">
                <input type="text" value="{{ $question->q6 }}" id="ans6">
                <input type="text" value="{{ $question->q7 }}" id="ans7">
                <input type="text" value="{{ $question->q8 }}" id="ans8">
                <input type="text" value="{{ $question->q9 }}" id="ans9">
                <input type="text" value="{{ $question->q10 }}" id="ans10">

                <input type="text" value="{{ $question->q11 }}" id="ans11">
                <input type="text" value="{{ $question->q12 }}" id="ans12">
                <input type="text" value="{{ $question->q13 }}" id="ans13">
                <input type="text" value="{{ $question->q14 }}" id="ans14">
                <input type="text" value="{{ $question->q15 }}" id="ans15">
                <input type="text" value="{{ $question->q16 }}" id="ans16">
                <input type="text" value="{{ $question->q17 }}" id="ans17">
                <input type="text" value="{{ $question->q18 }}" id="ans18">
                <input type="text" value="{{ $question->q19 }}" id="ans19">
                <input type="text" value="{{ $question->q20 }}" id="ans20">

                <input type="text" value="{{ $question->q21 }}" id="ans21">
                <input type="text" value="{{ $question->q22 }}" id="ans22">
                <input type="text" value="{{ $question->q23 }}" id="ans23">
                <input type="text" value="{{ $question->q24 }}" id="ans24">
                <input type="text" value="{{ $question->q25 }}" id="ans25">
                <input type="text" value="{{ $question->q26 }}" id="ans26">
                <input type="text" value="{{ $question->q27 }}" id="ans27">
                <input type="text" value="{{ $question->q28 }}" id="ans28">
                <input type="text" value="{{ $question->q29 }}" id="ans29">
                <input type="text" value="{{ $question->q30 }}" id="ans30">

                <input type="text" value="{{ $question->q31 }}" id="ans31">
                <input type="text" value="{{ $question->q32 }}" id="ans32">
                <input type="text" value="{{ $question->q33 }}" id="ans33">
                <input type="text" value="{{ $question->q34 }}" id="ans34">
                <input type="text" value="{{ $question->q35 }}" id="ans35">
                <input type="text" value="{{ $question->q36 }}" id="ans36">
                <input type="text" value="{{ $question->q37 }}" id="ans37">
                <input type="text" value="{{ $question->q38 }}" id="ans38">
                <input type="text" value="{{ $question->q39 }}" id="ans39">
                <input type="text" value="{{ $question->q40 }}" id="ans40">

                <input type="text" value="{{ $question->q41 }}" id="ans41">
                <input type="text" value="{{ $question->q42 }}" id="ans42">
                <input type="text" value="{{ $question->q43 }}" id="ans43">
                <input type="text" value="{{ $question->q44 }}" id="ans44">
                <input type="text" value="{{ $question->q45 }}" id="ans45">
                <input type="text" value="{{ $question->q46 }}" id="ans46">
                <input type="text" value="{{ $question->q47 }}" id="ans47">
                <input type="text" value="{{ $question->q48 }}" id="ans48">
                <input type="text" value="{{ $question->q49 }}" id="ans49">
                <input type="text" value="{{ $question->q50 }}" id="ans50">
            </div>
        </div>

        <script>
            window.onbeforeunload = function() {
                return window.location.href = "/student-logout";
            };

            const pdfFrame = document.getElementById('pdfViewer');
            pdfFrame.contentDocument.oncontextmenu = function(event) {
                event.preventDefault();
                return false;
            };

            pdfFrame.contentDocument.onselectstart = function(event) {
                event.preventDefault();
                return false;
            };
        </script>
    @else
        <div>
            <div class="content">
                <div class="row g-3 mb-3">
                    <div class="col-lg-4 col-md-4 order-md-last order-sm-first">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row g-3 h-100">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="card position-relative rounded-4">
                                            <div class="card-body p-3 pt-xxl-4">
                                                <h2 id="timer" class="text-center fw-bold"></h2>
                                                <h5 class="text-center">Allotted Time: {{ $question->time_minutes }} Min
                                                    </h6>
                                                    <hr>
                                                    <h5 class="text-center">Total Questions:
                                                        {{ $question->total_question }}
                                                    </h5>
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

                                            <iframe id="pdfViewer" src="{{ url('storage/' . $question->question_pdf) }}"
                                                style="width: 100%; height: 400px;" frameborder="0"></iframe>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif




    <script>
        window.addEventListener('load', function() {
            var totalQuestions = parseInt(document.getElementById('optionsContainer').getAttribute(
                'data-total-questions'));
            var currentQuestion = 1;
            var selectedOptions = {};

            // Extract allotted mark from the 'mark' input field
            var allottedMark = parseInt(document.getElementById('mark').value);
            var correctAnswers = {};
            for (var i = 1; i <= totalQuestions; i++) {
                correctAnswers[i] = document.getElementById('ans' + i).value.toUpperCase();
            }

            var score = 0;

            var options = ['A', 'B', 'C', 'D'];

            function populateOptions(questionNumber) {
                var optionsHtml = '';
                for (var i = 0; i < options.length; i++) {
                    var optionId = options[i];
                    optionsHtml += '<div class="form-check">';
                    optionsHtml += '<input class="form-check-input" type="radio" name="answer" id="' + optionId +
                        '" value="' + optionId + '" required>';
                    optionsHtml += '<label class="form-check-label" for="' + optionId + '">' + options[i] +
                        '</label>';
                    optionsHtml += '</div>';
                }
                document.getElementById('options').innerHTML = optionsHtml;

                var selectedRadio = document.getElementById(selectedOptions[questionNumber]);
                if (selectedRadio) {
                    selectedRadio.checked = true;
                }

                document.getElementById('questionNumber').value = 'Question ' + questionNumber;


                document.getElementById('nextBtn').disabled = (questionNumber > totalQuestions);
                document.getElementById('prevBtn').disabled = (questionNumber === 1);
            }

            function updateScore(selectedOption, questionNumber) {
                if (correctAnswers[questionNumber] === selectedOption) {
                    score += allottedMark;
                } else if (selectedOptions[questionNumber]) {
                    score -= allottedMark;
                }
            }

            populateOptions(currentQuestion);

            document.getElementById('nextBtn').addEventListener('click', function(event) {
                event.preventDefault();
                var radio = document.querySelector('input[name="answer"]:checked');
                if (radio) {
                    var selectedOption = radio.id;
                    var questionNumber = currentQuestion;

                    updateScore(selectedOption, questionNumber);

                    selectedOptions[questionNumber] = selectedOption;

                    document.getElementById('totalScore').value = 'Total Score:  ' + score;
                }
                if (currentQuestion < totalQuestions) {
                    currentQuestion++;
                    populateOptions(currentQuestion);
                } else {
                    alert('You have reached the last question options.');
                }
            });

            document.getElementById('prevBtn').addEventListener('click', function(event) {
                event.preventDefault();
                var radio = document.querySelector('input[name="answer"]:checked');
                if (radio) {
                    var selectedOption = radio.id;
                    var questionNumber = currentQuestion;

                    updateScore(selectedOption, questionNumber);

                    selectedOptions[questionNumber] = selectedOption;
                }
                if (currentQuestion > 1) {
                    currentQuestion--;
                    populateOptions(currentQuestion);
                }
            });

            document.getElementById('submitButton').addEventListener('click', function(event) {
                event.preventDefault();

                // Update the hidden input field with the selected options
                document.getElementById('selectedOptionsInput').value = JSON.stringify(selectedOptions);

                // Update the hidden input field with the score
                document.getElementById('scoreInput').value = score;

                // Now you can submit the form manually
                document.getElementById('quizForm').submit();
            });
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
                window.location.href = "/student-logout";
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

    <!-- Add PDF.js script -->
    <script src="{{ asset('node_modules/pdfjs-dist/build/pdf.js') }}"></script>

    <script>
        // Function to render PDF using PDF.js
        function renderPDF(url, canvasContainer) {
            pdfjsLib.getDocument(url).promise.then(pdf => {
                // Fetch the first page
                pdf.getPage(1).then(page => {
                    // Set scale and viewport
                    const scale = 1.5;
                    const viewport = page.getViewport({
                        scale
                    });

                    // Get the canvas container for rendering the PDF
                    const canvas = document.createElement('canvas');
                    canvasContainer.appendChild(canvas);

                    // Set canvas dimensions
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render the PDF page on the canvas
                    page.render({
                        canvasContext: canvas.getContext('2d'),
                        viewport: viewport
                    });
                });
            });
        }

        // Get the iframe and render the PDF when the iframe loads
        const pdfFrame = document.getElementById('pdfViewer');
        pdfFrame.onload = function() {
            // Get the content document of the iframe
            const iframeDoc = pdfFrame.contentDocument || pdfFrame.contentWindow.document;

            // Call renderPDF function passing URL and iframe document
            renderPDF('{{ url('storage/' . $question->question_pdf) }}', iframeDoc.body);
        };
    </script>
@endsection
