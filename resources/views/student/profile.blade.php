@extends('layouts.app_student')

@section('content')
    <div class="content">
        <div class="row g-0">
            <div class="col-lg-10 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Update Your Password</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="row g-3" method="POST" action="{{ route('student.passwordUpdate') }}">
                            @csrf

                            <div class="row gx-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="card-password">Password</label>
                                    <input name="password" class="form-control  @error('password') is-invalid @enderror"
                                        type="password" autocomplete="on" id="card-password" />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="card-confirm-password">Confirm
                                        Password</label>
                                    <input name="password_confirmation" class="form-control" type="password"
                                        autocomplete="on" id="card-confirm-password" />
                                </div>
                            </div>


                            <input name="student_id" value="{{ auth()->guard('student')->user()->Student_ID }}"
                                class="form-control" type="hidden" />



                            <div class="col-12 d-flex justify-content-start">
                                <button class="btn btn-primary" type="submit">Set Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
