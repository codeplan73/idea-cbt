@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Update Staff Settings</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form action="/staff/{{ $staff->ID }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row my-4 gy-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="first-name">Staff ID</label>
                                    <input class="form-control" readonly type="text" value="{{ $staff->Staff_ID }}" />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="Fullname">Fullname</label>
                                    <input class="form-control @error('Fullname') is-invalid @enderror" name="Fullname"
                                        readonly id="Fullname" type="text" value="{{ $staff->Fullname }}" />
                                    @error('Fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="class" class="form-label">Staff Status</label>
                                    <select class="js-select form-select @error('Staff_Status') is-invalid @enderror"
                                        name="Staff_Status">
                                        <option value="{{ $staff->Staff_Status }}">{{ $staff->Staff_Status }}
                                        </option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->staff_status))
                                                <option value="{{ $sys->staff_status }}">{{ $sys->staff_status }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Staff_Status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="class" class="form-label">Staff Role</label>
                                    <select class="js-select form-select @error('Staff_role') is-invalid @enderror"
                                        name="Staff_role">
                                        <option value="{{ $staff->role }}">{{ $staff->role }}
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    @error('Staff_role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label" for="email2">Phone Number</label>
                                    <input class="form-control @error('Phone_No') is-invalid @enderror" name="Phone_No"
                                        type="text" value="{{ $staff->Phone_No }}" />
                                    @error('Phone_No')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="email2">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password"
                                        type="text" value="{{ $staff->plain_password }}" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-12 d-flex justify-content-start">
                                <button class="btn btn-primary" type="submit">Update Staff Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
