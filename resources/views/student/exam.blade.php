@extends('layouts.app_student')

@section('content')
    <div class="content">
        <div class="card mb-3">
            <div class="card-body d-flex flex-wrap flex-between-center">
                <div>
                    <h6 class="text-primary">Welcome</h6>
                    <h5 class="mb-0">{{ auth()->guard('student')->user()->Fullnames }}</h5>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-xxl-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="card font-sans-serif">
                            <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center"><img
                                    class="rounded-3" src="{{ asset('assets/logo/logo.png') }}" alt=""
                                    width="112" />
                                <table class="table table-borderless fs--1 fw-medium mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="p-1" style="width: 35%;">Student ID:</td>
                                            <td class="p-1 text-600">{{ auth()->guard('student')->user()->Student_ID }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%;">Fullname:</td>
                                            <td class="p-1 text-600">{{ auth()->guard('student')->user()->Fullnames }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%;">Session:</td>
                                            <td class="p-1">
                                                <a class="text-600 text-decoration-none"
                                                    href="mailto:goodguy@nicemail.com">{{ auth()->guard('student')->user()->Session_ }}
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%;">Class:</td>
                                            <td class="p-1">
                                                <a class="text-600 text-decoration-none"
                                                    href="mailto:goodguy@nicemail.com">{{ auth()->guard('student')->user()->Student_Class }}
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header d-flex flex-center bg-secondary">
                <h4 class="mb-0 text-center text-warning text-light my-2"><strong>CBT STUDENT LOGIN DETAILS</strong></h4>
            </div>
            <div class="card-footer bg-body-tertiary py-2 text-center">
                <form action="" method="post">
                    <div class="row gy-3">
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Student ID</label>
                                <input type="text" class="form-control text-center" name="Student_ID"
                                    value="{{ auth()->guard('student')->user()->Student_ID }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Name</label>
                                <input type="text" class="form-control text-center" name="Student_ID"
                                    value="{{ auth()->guard('student')->user()->Fullnames }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Class</label>
                                <input type="text" class="form-control text-center" name="Student_ID"
                                    value="{{ auth()->guard('student')->user()->Student_Class }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Status</label>
                                <input type="text" class="form-control text-center" name="Student_ID"
                                    value="{{ auth()->guard('student')->user()->account_status }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Branch</label>
                                <input type="text" class="form-control text-center"
                                    name="Student_ID"value="{{ auth()->guard('student')->user()->Branch }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Phone Number</label>
                                <input type="text" class="form-control text-center" name="Student_ID"
                                    value="{{ auth()->guard('student')->user()->Phone_Number }}" readonly>
                            </div>
                        </div>


                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Exam ID</label>
                                <input type="text" class="form-control text-center" name="Student_ID" value=""
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Question Type</label>
                                <input type="text" class="form-control text-center" name="Student_ID" value=""
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Test Type</label>
                                <input type="text" class="form-control text-center" name="Student_ID" value=""
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Subject</label>
                                <input type="text" class="form-control text-center" name="Student_ID" value=""
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Term</label>
                                <input type="text" class="form-control text-center" name="Student_ID" value=""
                                    readonly>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-2 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="Student_ID" class="form-label text-left">Session</label>
                                <input type="text" class="form-control text-center" name="Student_ID" value=""
                                    readonly>
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
