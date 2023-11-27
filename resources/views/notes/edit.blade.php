@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Note information</h6>
                </div>
                <div class="card-body">
                    <form action="/notes/{{ $note->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Form -->

                        <div class="row mb-4">
                            <div class="col-md-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <div class="">
                                        <label for="subject" class="form-label">Subject </label>
                                        <select class="js-select form-select @error('subject') is-invalid @enderror"
                                            name="subject">
                                            <option value="{{ $note->subject }}">{{ $note->subject }}</option>
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
                                        <option value="{{ $note->class }}">{{ $note->class }}</option>
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
                                        <option value="{{ $note->term }}">{{ $note->term }}</option>
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
                                        <option value="{{ $note->session }}">{{ $note->session }}</option>
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
                                    <label for="subject" class="form-label">week</label>
                                    <select class="js-select form-select @error('week') is-invalid @enderror"
                                        name="week">
                                        <option value="{{ $note->week }}">{{ $note->week }}</option>
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->week))
                                                <option value="{{ $sys->week }}">{{ $sys->week }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('week')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="note_pdf" class="form-label">PDF Preview</label>

                                <embed src="{{ url('storage/' . $note->note_pdf) }}" width="100%" height="400px" />

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
