@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Book information</h6>
                </div>
                <div class="card-body">
                    <form action="/books/{{ $book->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Form -->

                        <div class="row mb-4">
                            <div class="col-md-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <div class="mb-1">
                                        <label for="subject" class="form-label">Subject </label>
                                        <select class="js-select form-select @error('subject') is-invalid @enderror"
                                            name="subject">
                                            <option value="{{ $book->subject }}">{{ $book->subject }}</option>
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
                                        <option value="{{ $book->class }}">{{ $book->class }}</option>
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
                                        <option value="{{ $book->term }}">{{ $book->term }}</option>
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
                                        <option value="{{ $book->session }}">{{ $book->session }}</option>
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


                            <div class="col-12">
                                <label for="book_pdf" class="form-label">PDF Preview</label>

                                <embed src="{{ url('storage/' . $book->book_pdf) }}" type="application/pdf" width="100%"
                                    height="400px" />

                            </div>


                            @include('components.file-upload-preview-book')

                            @include('components.button', ['label' => 'Submit'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
