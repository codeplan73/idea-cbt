@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Book information</h6>
                </div>
                <div class="card-body">


                    <div class="row mb-4">
                        <div class="col-md-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <div class="">
                                    <label for="subject" class="form-label">Subject </label>
                                    <p>{{ $book->subject }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Class</label>
                                <p>{{ $book->class }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Term</label>
                                <p>{{ $book->term }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Session</label>
                                <p>{{ $book->session }}</p>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">week</label>
                                <p>{{ $book->week }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <embed src="{{ url('storage/' . $book->book_pdf) }}" type="application/pdf" width="100%"
                                height="400px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
