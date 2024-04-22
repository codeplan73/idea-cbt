@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Book information</h6>
                </div>
                <div class="card-body">
                    <form action="/library/{{ $library->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Form -->

                        <div class="row mb-4">
                            <div class="col-md-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <div class="mb-1">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" value="{{ $library->name }}" placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <div class="mb-1">
                                        <label for="date_" class="form-label">Date </label>
                                        <input type="date" class="form-control @error('date_') is-invalid @enderror"
                                            name="date_" id="date_" value="{{ $library->date_ }}" placeholder="Date_">
                                        @error('date_')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="library_pdf" class="form-label">PDF Preview</label>

                                <embed src="{{ url('storage/' . $library->library_pdf) }}" type="application/pdf"
                                    width="100%" height="400px" />

                            </div>


                            @include('components.file-upload-library')

                            @include('components.button', ['label' => 'Submit'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
