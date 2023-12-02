@extends('layouts.app_student')

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Invalid!',
                text: '{{ session('error') }}'
            });
        });
    </script>
@endif

@section('content')
    <div class="content">
        <div class="row g-0">
            <div class="col-lg-10 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0 text-center mb-4 mt-2">Select Class & enter Your Result PIN to Check Your Result</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="row g-3" method="POST" action="{{ route('student-result.store') }}">
                            @csrf

                            <div class="row gx-2 mx-auto">
                                <div class="col-md-4
                                 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="branch" class="form-label">Branch</label>
                                        <select class="js-select form-select @error('branch') is-invalid @enderror"
                                            name="branch">
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->branch))
                                                    <option value="{{ $sys->branch }}">{{ $sys->branch }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('branch')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4
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
                                <div class="col-md-4">
                                    <label class="form-label " for="pin">PIN</label>
                                    <input name="resultPin" placeholder="Enter Your PIN"
                                        class="form-control  @error('pin') is-invalid @enderror" type="number"
                                        autocomplete="on" id="pin" />

                                    @error('resultPin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 d-flex justify-content-start mx-auto">
                                <button class="btn btn-primary mx-auto" type="submit">Check Result</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
