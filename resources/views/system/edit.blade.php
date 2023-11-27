@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Add Item</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Basic information</h6>
                </div>
                <div class="card-body">
                    <form action="/system/{{ $system->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <!-- Form -->

                        <div class="row mb-4">
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Subject </label>

                                    <input type="text" value="{{ $system->subject }}" class="form-control" name="subject"
                                        id="subject" placeholder="Subject">
                                </div>

                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" class="form-control" value="{{ $system->branch }}" name="branch"
                                        id="branch" placeholder="Branch">
                                </div>

                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="student_status" class="form-label">Student Status</label>
                                    <input type="text" value="{{ $system->student_status }}" class="form-control"
                                        name="student_status" id="student_status" placeholder="student_status">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="staff_status" class="form-label">Staff Status</label>
                                    <input type="text" value="{{ $system->staff_status }}" class="form-control"
                                        name="staff_status" id="staff_status" placeholder="staff_status">
                                </div>
                            </div>

                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="class" class="form-label">Class</label>
                                    <input type="text" value="{{ $system->class }}" class="form-control" name="class"
                                        id="class" placeholder="class">
                                </div>

                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="term" class="form-label">Term</label>
                                    <input type="text" value="{{ $system->term }}" class="form-control" name="term"
                                        id="term" placeholder="term">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="session" class="form-label">Session</label>
                                    <input type="text" value="{{ $system->session }}" class="form-control" name="session"
                                        id="session">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_type" class="form-label">Question Type</label>
                                    <input type="text" value="{{ $system->question_type }}" class="form-control"
                                        name="question_type" id="question_type">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="exam_type" class="form-label">Exam Type</label>
                                    <input type="text" value="{{ $system->exam_type }}" class="form-control"
                                        name="exam_type" id="exam_type">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="week" class="form-label">Exam Type</label>
                                    <input type="text" value="{{ $system->week }}" class="form-control"
                                        name="week" id="week">
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-info btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
