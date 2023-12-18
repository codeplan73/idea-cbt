@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Note information</h6>
                </div>
                <div class="card-body">


                    <div class="row mb-4">
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <div class="">
                                    <label for="subject" class="form-label">Subject </label>
                                    <p>{{ $note->subject }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Class</label>
                                <p>{{ $note->class }}</p>
                            </div>
                        </div>
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Term</label>
                                <p>{{ $note->term }}</p>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Session</label>
                                <p>{{ $note->session }}</p>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6 mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">week</label>
                                <p>{{ $note->week }}</p>
                            </div>
                        </div> --}}

                        <div class="col-12">
                            <embed src="{{ url('storage/' . $note->note_pdf) }}" width="100%" height="500px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
