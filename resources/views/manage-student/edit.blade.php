@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Update Student Settings</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form action="/manage-student/{{ $student->ID }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row my-4 gy-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="first-name">Student ID</label>
                                    <input class="form-control @error('Student_ID') is-invalid @enderror" name="Student_ID"
                                        readonly id="first-name" type="text" value="{{ $student->Student_ID }}" />
                                    @error('Student_ID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="Fullnames">Fullnames</label>
                                    <input class="form-control @error('Fullnames') is-invalid @enderror" name="Fullnames"
                                        id="Fullnames" type="text"value="{{ $student->Fullnames }}" />
                                    @error('Fullnames')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="Student_Class" class="form-label">Class</label>
                                        <select class="js-select form-select @error('Student_Class') is-invalid @enderror"
                                            name="Student_Class">
                                            <option value="{{ $student->Student_Class }}">{{ $student->Student_Class }}
                                            </option>
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->class))
                                                    <option value="{{ $sys->class }}">{{ $sys->class }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('Student_Class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <label for="class" class="form-label">Branch</label>
                                    <select class="js-select form-select @error('Branch') is-invalid @enderror"
                                        name="Branch">
                                        <option value="{{ $student->Branch }}">{{ $student->Branch }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->branch))
                                                <option value="{{ $sys->branch }}">{{ $sys->branch }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Branch')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="Term" class="form-label">Term</label>
                                        <select class="js-select form-select @error('Term') is-invalid @enderror"
                                            name="Term">
                                            <option value="{{ $student->Term_Adm }}">{{ $student->Term_Adm }}</option>
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->term))
                                                    <option value="{{ $sys->term }}">{{ $sys->term }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('Term')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="Session_" class="form-label">Session</label>
                                        <select class="js-select form-select @error('Session_') is-invalid @enderror"
                                            name="Session_">
                                            <option value="{{ $student->Session_ }}">{{ $student->Session_ }}</option>
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->session))
                                                    <option value="{{ $sys->session }}">{{ $sys->session }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('Session_')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <label for="class" class="form-label">Student Status</label>
                                    <select class="js-select form-select @error('Current_Status') is-invalid @enderror"
                                        name="Current_Status">
                                        <option value="{{ $student->Current_Status }}">{{ $student->Current_Status }}
                                        </option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->student_status))
                                                <option value="{{ $sys->student_status }}">{{ $sys->student_status }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Current_Status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <label for="class" class="form-label">Gender</label>
                                    <select class="js-select form-select @error('Gender') is-invalid @enderror"
                                        name="Gender">
                                        <option value="{{ $student->Gender }}">{{ $student->Gender }}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @error('Gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <label for="class" class="form-label">Student Pin</label>
                                    <input type="Student_Pin"
                                        class="form-control @error('Student_Pin') is-invalid @enderror" name="Student_Pin"
                                        value="{{ $student->Student_Pin }}" />
                                    @error('Student_Pin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                    <label for="class" class="form-label">Phone Number</label>
                                    <input type="Phone_Number"
                                        class="form-control @error('Phone_Number') is-invalid @enderror"
                                        name="Phone_Number" value="{{ $student->Phone_Number }}" />
                                    @error('Phone_Number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row gx-2">
                                <div class="mb-3 col-sm-6">
                                    <label class="form-label" for="card-password">Password</label>
                                    <input name="password" class="form-control  @error('password') is-invalid @enderror"
                                        type="text" autocomplete="on" id="card-password"
                                        value="{{ $student->plain_password }}" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-start">
                                <button class="btn btn-primary" type="submit">Update Account </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
