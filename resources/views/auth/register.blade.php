@extends('layouts.auth')

@section('content')
    <div class="container py-5 py-sm-7">
        <a class="d-flex justify-content-center mb-5" href="/">
            <img class="zi-2 rounded-full" src="{{ asset('assets/logo/logo.png') }}" alt="Image Description"
                style="width: 8rem; height:8rem; border-radius:10px;">
        </a>

        <div class="mx-auto" style="max-width: 30rem;">
            <!-- Card -->
            <div class="card card-lg mb-5">
                <div class="card-body">
                    <a href="/" class="bg-light mb-4 text-dark rounde btn fw-bold">
                        << Go Back</a>
                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label class="form-label" for="Fullnames">Full name</label>
                                <div class="mb-4">
                                    <input type="text" name="Fullnames"
                                        class="form-control form-control-lg  @error('Fullnames') is-invalid @enderror"
                                        id="Fullnames" value="{{ old('Fullnames') }}" required>
                                    @error('Fullnames')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <label class="form-label" for="Staff_ID">Staff-ID</label>
                                <div class="mb-4">
                                    <input type="text"
                                        class="form-control form-control-lg  @error('Staff_ID') is-invalid @enderror"
                                        name="Staff_ID" value="{{ old('Staff_ID') }}" required>
                                    @error('Staff_ID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label class="form-label" for="fullNameSrEmail">Email</label>
                                <div class="mb-4">
                                    <input type="email"
                                        class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- End Form -->

                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="card-password">Password</label>
                                        <input name="password" class="form-control  @error('password') is-invalid @enderror"
                                            type="password" autocomplete="on" id="card-password" />

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="card-confirm-password">Confirm
                                            Password</label>
                                        <input name="password_confirmation" class="form-control" type="password"
                                            autocomplete="on" id="card-confirm-password" />
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Create an account</button>
                                </div>
                            </form>
                            <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
