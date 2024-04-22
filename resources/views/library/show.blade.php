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
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <div class="">
                                    <label for="name" class="form-label">Name </label>
                                    <p>{{ $library->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <date for="date_" class="form-label">Date</date>
                                <p>{{ $library->date_ }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <embed src="{{ url('storage/' . $library->library_pdf) }}" type="application/pdf" width="100%"
                                height="500px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
