@extends('layouts.app_student')

@section('content')
    <script>
        (function(window, history) {
            function disableBackAndForward() {
                // Replace the current state.
                history.pushState(null, null, window.location.href);

                // When the user attempts to navigate back or forward, replace the state again.
                window.addEventListener('popstate', function() {
                    history.pushState(null, null, window.location.href);
                });
            }

            window.addEventListener('load', disableBackAndForward);

        })(window, history);
    </script>

    @if (optional($answer)->student_id == auth()->guard('student')->user()->Student_ID)
        @if ($question->question_type == 'Objective')
            <div class="content">
                <div class="row g-3 mb-3">
                    <div class="col-lg-12 col-md-12 order-md-first order-sm-last">
                        <div class="card h-100">
                            <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">

                                <h6 class="mb-0">Objective |
                                    ID:<span class="fw-bold">{{ $answer->exam_id }} </span>
                                </h6>
                                <div class="d-flex flex-between-center gap-1">
                                    @if ($question->end_time)
                                        <h6>Stop-Time: </h6>
                                        <h6 id="timerB" class="text-center fw-bold">
                                            {{ ' ' . $question->end_time }}
                                        </h6>
                                    @else
                                        <h6 class="fw-bold">Stop Time Not Set</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 h-100">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card position-relative rounded-4">
                                            <iframe id="pdfViewer" src="{{ url('storage/' . $question->question_pdf) }}"
                                                style="width: 100%; height: 350px;" frameborder="0"></iframe>
                                        </div>
                                    </div>

                                    <form id="quizForm" action="/exam/{{ $question->id }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-12 col-lg-12">
                                            <div id="optionContainer" class="row">
                                                <div class="col-md-12 px-5" id="optionsContainer"
                                                    data-total-questions="{{ $question->total_question }}">
                                                    <div class="d-flex justify-content-between align-items-center"
                                                        id="options">
                                                        <!-- Options will be dynamically populated here -->
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <button class="btn btn-primary" style="width: 90px;"
                                                            id="prevBtn">Prev</button>
                                                    </div>
                                                    <div>
                                                        <input type="text" class="form-control text-center fw-bold"
                                                            id="questionNumber" readonly>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary" style="width: 90px;"
                                                            id="nextBtn">Next</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <input type="hidden" name="selectedOptions" id="selectedOptionsInput">
                                            <input type="hidden" name="answersObj" id="answersInput">

                                            <input type="hidden" name="allottedMark" value="{{ $question->alloted_mark }}">
                                            <input type="hidden" id="endTime" name="end_time"
                                                value="{{ $question->end_time }}">

                                            <input type="hidden" name="exam_type" value="{{ $question->exam_type }}">

                                            <input type="hidden" name="subject" value="{{ $question->subject }}">
                                            <input type="hidden" name="session" value="{{ $question->session }}">
                                            <input type="hidden" name="term" value="{{ $question->term }}">
                                            <input type="hidden" name="class"
                                                value="{{ auth()->guard('student')->user()->Student_Class }}">


                                            <div class="d-flex flex-between-center pt-3">
                                                <button type="submit" class="btn btn-info" id="submitButton">
                                                    Submit
                                                </button>
                                                {{-- @if (!empty($question->end_time)) --}}
                                                <div class="d-flex flex-between-center gap-1">
                                                    {{-- <h5>Stop-Time: </h5>
                                                    <h5 id="timerB" class="text-center fw-bold">
                                                        {{ $question->end_time }}
                                                    </h5> --}}

                                                    <h5>Time Left: </h5>
                                                    <h5 id="timer" class="text-center fw-bold "></h5>
                                                </div>
                                                {{-- @endif --}}
                                            </div>
                                            <div id="answerContainer">
                                                <input type="hidden" value="{{ $question->alloted_mark }}" id="mark">
                                                <input type="hidden" value="{{ $question->q1 }}" id="ans1">
                                                <input type="hidden" value="{{ $question->q2 }}" id="ans2">
                                                <input type="hidden" value="{{ $question->q3 }}" id="ans3">
                                                <input type="hidden" value="{{ $question->q4 }}" id="ans4">
                                                <input type="hidden" value="{{ $question->q5 }}" id="ans5">
                                                <input type="hidden" value="{{ $question->q6 }}" id="ans6">
                                                <input type="hidden" value="{{ $question->q7 }}" id="ans7">
                                                <input type="hidden" value="{{ $question->q8 }}" id="ans8">
                                                <input type="hidden" value="{{ $question->q9 }}" id="ans9">
                                                <input type="hidden" value="{{ $question->q10 }}" id="ans10">

                                                <input type="hidden" value="{{ $question->q11 }}" id="ans11">
                                                <input type="hidden" value="{{ $question->q12 }}" id="ans12">
                                                <input type="hidden" value="{{ $question->q13 }}" id="ans13">
                                                <input type="hidden" value="{{ $question->q14 }}" id="ans14">
                                                <input type="hidden" value="{{ $question->q15 }}" id="ans15">
                                                <input type="hidden" value="{{ $question->q16 }}" id="ans16">
                                                <input type="hidden" value="{{ $question->q17 }}" id="ans17">
                                                <input type="hidden" value="{{ $question->q18 }}" id="ans18">
                                                <input type="hidden" value="{{ $question->q19 }}" id="ans19">
                                                <input type="hidden" value="{{ $question->q20 }}" id="ans20">

                                                <input type="hidden" value="{{ $question->q21 }}" id="ans21">
                                                <input type="hidden" value="{{ $question->q22 }}" id="ans22">
                                                <input type="hidden" value="{{ $question->q23 }}" id="ans23">
                                                <input type="hidden" value="{{ $question->q24 }}" id="ans24">
                                                <input type="hidden" value="{{ $question->q25 }}" id="ans25">
                                                <input type="hidden" value="{{ $question->q26 }}" id="ans26">
                                                <input type="hidden" value="{{ $question->q27 }}" id="ans27">
                                                <input type="hidden" value="{{ $question->q28 }}" id="ans28">
                                                <input type="hidden" value="{{ $question->q29 }}" id="ans29">
                                                <input type="hidden" value="{{ $question->q30 }}" id="ans30">

                                                <input type="hidden" value="{{ $question->q31 }}" id="ans31">
                                                <input type="hidden" value="{{ $question->q32 }}" id="ans32">
                                                <input type="hidden" value="{{ $question->q33 }}" id="ans33">
                                                <input type="hidden" value="{{ $question->q34 }}" id="ans34">
                                                <input type="hidden" value="{{ $question->q35 }}" id="ans35">
                                                <input type="hidden" value="{{ $question->q36 }}" id="ans36">
                                                <input type="hidden" value="{{ $question->q37 }}" id="ans37">
                                                <input type="hidden" value="{{ $question->q38 }}" id="ans38">
                                                <input type="hidden" value="{{ $question->q39 }}" id="ans39">
                                                <input type="hidden" value="{{ $question->q40 }}" id="ans40">

                                                <input type="hidden" value="{{ $question->q41 }}" id="ans41">
                                                <input type="hidden" value="{{ $question->q42 }}" id="ans42">
                                                <input type="hidden" value="{{ $question->q43 }}" id="ans43">
                                                <input type="hidden" value="{{ $question->q44 }}" id="ans44">
                                                <input type="hidden" value="{{ $question->q45 }}" id="ans45">
                                                <input type="hidden" value="{{ $question->q46 }}" id="ans46">
                                                <input type="hidden" value="{{ $question->q47 }}" id="ans47">
                                                <input type="hidden" value="{{ $question->q48 }}" id="ans48">
                                                <input type="hidden" value="{{ $question->q49 }}" id="ans49">
                                                <input type="hidden" value="{{ $question->q50 }}" id="ans50">
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="content">
                <div class="row g-3 mb-3">
                    <div class="col-lg-12 col-md-12 order-md-first order-sm-last">
                        <div class="card h-100">
                            <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                                <h6 class="mb-0">Theory</h6>
                                <div class="d-flex flex-between-center gap-1">
                                    @if ($question->end_time)
                                        <h6>Stop-Time: </h6>
                                        <h6 id="timerB" class="text-center fw-bold">
                                            {{ $question->end_time }}
                                        </h6>
                                    @else
                                        <h6 class="fw-bold">Stop Time Not Set</h6>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 h-100">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="card position-relative rounded-4">
                                            <iframe id="pdfViewer" src="{{ url('storage/' . $question->question_pdf) }}"
                                                style="width: 100%; height: 425px;" frameborder="0"></iframe>
                                        </div>
                                        <div class="d-flex flex-between-center pt-3 align-items-center">
                                            <a class="btn btn-outline-warning mt-4" href="/student-logout">Close</a>
                                            <div class="d-flex flex-between-center align-items-center mt-4"
                                                style="border:1px solid orange; color:orange; padding: 5px; border-radius: 5px; margin-top: 20px;">
                                                <h5 class="text-warning">Time: </h5>
                                                <h5 id="timer-theory" class="text-center text-warning"></h5>

                                                {{-- <h6>Time Left: </h6> --}}
                                                {{-- <button type="button" id="timer-theory"
                                                class="btn btn-outline-warning mt-4"></button> --}}
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
    @else
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Your were not registered in the system for this exam. You will be redirected to the previous page.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect the user to the previous page
                        window.history.back();
                    }
                });

                // Redirect the student when clicking anywhere on the page
                document.addEventListener('click', function() {
                    window.history.back();
                });
            });
        </script>
    @endif


    <script>
        window.addEventListener('load', function() {
            var totalQuestions = parseInt(document.getElementById('optionsContainer').getAttribute(
                'data-total-questions'));
            var currentQuestion = 1;
            var selectedOptions = {};
            var answers = {};
            var allottedMark = parseInt(document.getElementById('mark').value);
            var correctAnswers = {};

            for (var i = 1; i <= totalQuestions; i++) {
                correctAnswers[i] = document.getElementById('ans' + i).value.toUpperCase();
            }

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

                document.getElementById('questionNumber').value = questionNumber;

                document.getElementById('nextBtn').disabled = (questionNumber > totalQuestions);
                document.getElementById('prevBtn').disabled = (questionNumber === 1);
            }

            populateOptions(currentQuestion);
            var optionsContainer = document.getElementById('optionContainer');

            // Countdown timer logic
            var timeLeft = sessionStorage.getItem('timerValue') || {{ $question->time_minutes }} * 60;

            const timerElement = document.getElementById('timer');

            function updateTimer() {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                timerElement.textContent = ` ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                if (timeLeft === 0) {
                    // optionsContainer.style.display = 'none';
                    var radio = document.querySelector('input[name="answer"]:checked');
                    if (radio) {
                        var selectedOption = radio.id;
                        var questionNumber = currentQuestion;
                        selectedOptions[questionNumber] = selectedOption;
                    }
                    sessionStorage.clear();
                    submitForm();
                    sessionStorage.clear();
                } else {
                    timeLeft--;
                    sessionStorage.setItem('timerValue', timeLeft); // Store the updated timer value
                }
            }
            const timerInterval = setInterval(updateTimer, 1000);


            function submitForm() {
                sessionStorage.clear();
                // Update the hidden input field with the selected options
                document.getElementById('answersInput').value = JSON.stringify(correctAnswers);
                document.getElementById('selectedOptionsInput').value = JSON.stringify(selectedOptions);

                // Manually submit the form
                document.getElementById('quizForm').submit();
            }

            document.getElementById('nextBtn').addEventListener('click', function(event) {
                event.preventDefault();
                var radio = document.querySelector('input[name="answer"]:checked');
                if (radio) {
                    var selectedOption = radio.id;
                    var questionNumber = currentQuestion;
                    selectedOptions[questionNumber] = selectedOption;
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
                    selectedOptions[questionNumber] = selectedOption;
                }
                if (currentQuestion > 1) {
                    currentQuestion--;
                    populateOptions(currentQuestion);
                }
            });

            document.getElementById('submitButton').addEventListener('click', function(event) {
                event.preventDefault();
                clearInterval(timerInterval); // Stop the timer when the user manually submits the form
                submitForm(); // Submit the form manually

                sessionStorage.clear();
            });

            function submitWithTime() {
                let endTime = document.getElementById('endTime').value;

                var currentTime = new Date();

                // Format the time (optional)
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                var seconds = currentTime.getSeconds();

                // Add leading zero if needed
                hours = (hours < 10) ? "0" + hours : hours;
                minutes = (minutes < 10) ? "0" + minutes : minutes;
                seconds = (seconds < 10) ? "0" + seconds : seconds;

                // Display the current time
                var submitTime = hours + ":" + minutes + ":" + seconds;
                // console.log(`Current time: ${submitTime} and endTime is ${endTime}`);

                if (endTime.trim() !== "") {

                    if (submitTime >= endTime) {


                        Swal.fire({
                            icon: 'info',
                            title: 'Time Up!',
                            text: 'Your time has elapsed and the form will be submitted'
                        });

                        submitForm();

                        sessionStorage.clear();
                    }
                }
            }

            const checkInterval = setInterval(submitWithTime, 1000);
        });
    </script>

    <script>
        // JavaScript logic for countdown timer
        var timeLeft = sessionStorage.getItem('timerValue') || {{ $question->time_minutes }} * 60;

        const timerElement = document.getElementById('timer-theory');
        // const timerElement2 = document.getElementById('timerT');

        function updateTimer() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            // timerElement2.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            if (timeLeft === 0) {
                window.location.href = "/student-logout";
                sessionStorage.clear();
                window.history.forward();
            } else {
                timeLeft--;
                sessionStorage.setItem('timerValue', timeLeft);
            }
        }
        const timerInterval = setInterval(updateTimer, 1000);
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
