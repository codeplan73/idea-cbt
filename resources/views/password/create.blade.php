@extends('layouts.app')

@section('content')
    @include('components.form-alert-error')
    <div class="content">
        <div class="row g-0">
            <div class="col-lg-10 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Set All Student Password/Activate</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="row g-3" method="POST" action="{{ route('staff.updatePassword') }}">
                            @csrf
                            <div class="row gx-2">
                                <div class="col-md-3
                                 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="current_status" class="form-label">Student Status</label>
                                        <select class="js-select form-select @error('Current_Status') is-invalid @enderror"
                                            name="Current_Status">
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
                                </div>

                                <div class="col-md-3
                                 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="subject" class="form-label">Class</label>
                                        <select class="js-select form-select @error('class') is-invalid @enderror"
                                            name="class">
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->class))
                                                    <option value="{{ $sys->class }}">{{ $sys->class }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label" for="card-password">Password</label>
                                    <input name="password" class="form-control  @error('password') is-invalid @enderror"
                                        type="text" autocomplete="on" id="card-password" />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-3
                                ">
                                    <label class="form-label" for="card-confirm-password">Confirm
                                        Password</label>
                                    <input name="password_confirmation" class="form-control" type="text"
                                        autocomplete="on" id="card-confirm-password" />
                                </div>
                            </div>


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
