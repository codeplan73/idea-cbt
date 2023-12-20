@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-md-0">Update Current Term Result</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h5 class="mb-2 mb-md-0">Set Current Term Result </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('set-result-update') }}" method="post">
                        @csrf
                        @method('POST')
                        <!-- Form -->
                        <div class="row mb-4 gl-2">
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="title" class="form-label">Current Term </label>

                                    <select class="js-select form-select @error('Current_Term') is-invalid @enderror"
                                        name="Current_Term">
                                        <option value="{{ $cterm->Current_Term }}">{{ $cterm->Current_Term }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->term))
                                                <option value="{{ $sys->term }}">{{ $sys->term }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Current_Term')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="branch" class="form-label">Branch</label>

                                    <select class="js-select form-select @error('branch') is-invalid @enderror"
                                        name="branch">
                                        <option value="{{ $cterm->branch }}">{{ $cterm->branch }}</option>
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
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="title" class="form-label">Current Session </label>

                                    <select class="js-select form-select @error('Current_Session') is-invalid @enderror"
                                        name="Current_Session">
                                        <option value="{{ $cterm->Current_Session }}">{{ $cterm->Current_Session }}
                                        </option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->session))
                                                <option value="{{ $sys->session }}">{{ $sys->session }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Current_Session')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <input type="hidden" name="ID" value="{{ $cterm->ID }}" id="">

                            <div class="col-sm-12 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Announcement</label>
                                    <textarea type="text" class="form-control" name="announcement" id="announcement" placeholder="announcement">{{ $cterm->announcement }}</textarea>
                                </div>
                            </div>

                            <div class="mt-4">
                                @include('components.button', ['label' => 'Update Term'])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
