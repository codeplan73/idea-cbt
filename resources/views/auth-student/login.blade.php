@extends('layouts.auth')

@section('content')
    <div class="container py-5 py-sm-7">
        <a class="d-flex justify-content-center mb-5" href="/">
            <img class="zi-2 rounded-full" src="{{ asset('assets/logo/logo.png') }}" alt="Image Description"
                style="width: 6rem; border-radius:10%;">
        </a>

        @if (session('message'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'E-Note Dublicate!',
                        text: '{{ session('message') }}'
                    });
                });
            </script>
        @endif
        @if (session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'E-Note Dublicate!',
                        text: '{{ session('error') }}'
                    });
                });
            </script>
        @endif

        <div class="mx-auto" style="max-width: 30rem;">
            <!-- Card -->
            <div class="card card-lg mb-5">
                <div class="card-body">

                    <!-- Form -->
                    <form method="POST" action="{{ route('student.login') }}">
                        @csrf
                        <!-- Form -->
                        <label class="form-label" for="Student_ID">Student-ID</label>
                        <div class="mb-4">
                            <input type="text"
                                class="form-control form-control-lg  @error('Student_ID') is-invalid @enderror"
                                name="Student_ID" value="{{ old('Student_ID') }}">
                            @error('Student_ID')
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

                    <div class="d-grid">
                        <a href="/" class="bg-dark btn-xl mt-4 text-light rounde btn fw-bold">
                            << Go Back</a>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
