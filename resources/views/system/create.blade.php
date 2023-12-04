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
                    <form action="{{ route('system.store') }}" method="post">
                        @csrf
                        <!-- Form -->

                        <div class="row mb-4">
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Subject </label>

                                    <input type="text" class="form-control @error('class') is-invalid @enderror"
                                        name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" class="form-control" name="branch" id="branch"
                                        placeholder="Branch">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Session</label>
                                    <input type="text" class="form-control" name="session" id="session"
                                        placeholder="Session">
                                </div>
                            </div>

                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Student Status</label>
                                    <select class="js-select form-select" name="student_status">
                                        <option value=""></option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Graduated">Graduated</option>
                                        <option value="Left">Left</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Staff Status</label>
                                    <select class="js-select form-select" name="staff_status">
                                        <option value=""></option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Sacked">Sacked</option>
                                        <option value="Resigned">Resigned</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Class</label>
                                    <select class="js-select form-select" name="class">
                                        <option value=""></option>
                                        <option value="Creche">Crech</option>
                                        <option value="Pre-KG">Pre KG</option>
                                        <option value="KG1">KG1</option>
                                        <option value="KG2">KG2</option>
                                        <option value="KG3">KG3</option>
                                        <option value="Pry1">Pry1</option>
                                        <option value="Pry2">Pry2</option>
                                        <option value="Pry3">Pry3</option>
                                        <option value="Pry4">Pry4</option>
                                        <option value="Pry5">Pry5</option>
                                        <option value="Pry6">Pry6</option>
                                        <option value="Pre-JSS">Pre JSS</option>
                                        <option value="JSS1">JSS1</option>
                                        <option value="JSS2">JSS2</option>
                                        <option value="JSS3">JSS3</option>
                                        <option value="SS1">SS1</option>
                                        <option value="SS2">SS2</option>
                                        <option value="SS3">SS3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Term</label>
                                    <select class="js-select form-select" name="term">
                                        <option value=""></option>
                                        <option value="1st Term">1st Term</option>
                                        <option value="2nd Term">2nd Term</option>
                                        <option value="3rd Term">3rd Term</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_type" class="form-label">Question Type</label>
                                    <select class="js-select form-select" name="question_type">
                                        <option value=""></option>
                                        <option value="Objective">Objective</option>
                                        <option value="Theory">Theory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="exam_type" class="form-label">Exam Type</label>
                                    <select class="js-select form-select" name="exam_type">
                                        <option value=""></option>
                                        <option value="Test1">Test1</option>
                                        <option value="Test2">Test2</option>
                                        <option value="Test3">Test2</option>
                                        <option value="Exam">Exam</option>
                                    </select>
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
