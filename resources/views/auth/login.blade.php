@extends('layouts.auth')

@section('content')
    <div class="container py-5 py-sm-7">
        <a class="d-flex justify-content-center mb-5" href="/">
            <img class="zi-2 rounded-full" src="{{ asset('assets/logo/logo.png') }}" alt="Image Description"
                style="width: 6rem; border-radius:10%;">
        </a>

        <div class="mx-auto" style="max-width: 30rem;">
            <!-- Card -->
            <div class="card card-lg mb-5">
                <div class="card-body">
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <!-- Form -->
                        <label class="form-label" for="fullNameSrEmail">Staff-ID</label>
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



                        <div class="mb-3">
                            <label class="form-label" for="card-password">Password</label>
                            <input name="password" class="form-control  @error('password') is-invalid @enderror"
                                type="password" autocomplete="on" id="card-password" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
