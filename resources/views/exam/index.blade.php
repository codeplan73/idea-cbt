@extends('layouts.app_student')

<script>
    // Disable going back using browser navigation
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function() {
        history.pushState(null, null, document.URL);
    });
</script>

@section('content')
    <div class="content">
        @if (session('message'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Not Allowed!',
                        text: '{{ session('message') }}'
                    });
                });
            </script>
        @endif

        <div class="card mt-5">
            <div class="card-header bg-secondary" style="display: flex; justify-content:space-between; align-items:center;">
                <h4 class="mb-0 text-warning text-light">
                    <strong>CBT STUDENT LOGIN DETAILS</strong>
                </h4>
                <img class="circle" style="border-radius: 50%;"
                    src="{{ 'data:image/jpeg;base64,' . base64_encode(Auth::guard('student')->user()->Student_Image) }}"
                    alt="" width="80" height="80" />
            </div>
            <div class="card-footer bg-body-tertiary py-2 text-center">
                <form action="{{ route('exam.store') }}" method="post">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs   mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Student ID</label>
                                <input type="text" class="form-control text-center" name="Student_ID"
                                    value="{{ auth()->guard('student')->user()->Student_ID }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Fullnames" class="form-label text-left">Name</label>
                                <input type="text" class="form-control text-center" name="Fullnames"
                                    value="{{ auth()->guard('student')->user()->Fullnames }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_Class" class="form-label text-left">Class</label>
                                <input type="text" class="form-control text-center" name="Student_Class"
                                    value="{{ auth()->guard('student')->user()->Student_Class }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="account_status" class="form-label text-left">Status</label>
                                <input type="text" class="form-control text-center" name="account_status"
                                    value="{{ auth()->guard('student')->user()->Current_Status }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Branch" class="form-label text-left">Branch</label>
                                <input type="text" class="form-control text-center" name="Branch"
                                    value="{{ auth()->guard('student')->user()->Branch }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Phone_Number" class="form-label text-left">Phone Number</label>
                                <input type="text" class="form-control text-center" name="Phone_Number"
                                    value="{{ auth()->guard('student')->user()->Phone_Number }}" readonly>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="question_id" class="form-label text-left">Exam ID</label>
                                <input type="text" class="form-control text-center" name="question_id"
                                    value="{{ $question->question_id }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="question_type" class="form-label text-left">Question Type</label>
                                <input type="text" class="form-control text-center" name="question_type"
                                    value="{{ $question->question_type }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="exam_type" class="form-label text-left">Exam Type</label>
                                <input type="text" class="form-control text-center" name="exam_type"
                                    value="{{ $question->exam_type }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label text-left">Subject</label>
                                <input type="text" class="form-control text-center" name="subject"
                                    value="{{ $question->subject }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="term" class="form-label text-left">Term</label>
                                <input type="text" class="form-control text-center" name="term"
                                    value="{{ $question->term }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs  mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="session" class="form-label text-left">Session</label>
                                <input type="text" class="form-control text-center" name="session"
                                    value="{{ $question->session }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-6 d-flex flex-start">
                            <button type="submit" class="btn btn-info">Enter Exam</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
