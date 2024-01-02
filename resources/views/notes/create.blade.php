@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="mb-3 card">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class=" mb-md-0">Add Note</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="mb-3 card">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Note information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('note.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Form -->

                        <div class="mb-4 row">
                            <div class="col-md-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <div class="">
                                        <label for="subject" class="form-label">Subject </label>
                                        <select class="js-select form-select @error('subject') is-invalid @enderror"
                                            name="subject">
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->subject))
                                                    <option value="{{ $sys->subject }}">{{ $sys->subject }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-sm-0">
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

                            <div class="col-sm-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Term</label>
                                    <select class="js-select form-select @error('term') is-invalid @enderror"
                                        name="term">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->term))
                                                <option value="{{ $sys->term }}">{{ $sys->term }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('term')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-sm-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Session</label>
                                    <select class="js-select form-select @error('session') is-invalid @enderror"
                                        name="session">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->session))
                                                <option value="{{ $sys->session }}">{{ $sys->session }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('session')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-sm-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Week</label>
                                    <select class="js-select form-select @error('week') is-invalid @enderror"
                                        name="week">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->week))
                                                <option value="{{ $sys->week }}">{{ $sys->week }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('session')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            @include('components.file-upload-preview-note')

                            @include('components.button', ['label' => 'Submit'])
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
