@extends('layouts.app_student')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="mb-3 card card-body">
                {{-- <div style="display: flex; align-items: flex-start; justify-content: space-between">
                    <h5>Subject: {{ $video->subject }}</h5>
                    <h5>Topic: {{ $video->topic }}</h5>
                </div> --}}
                <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                    <p>Subject: {{ $video->subject }}</p>
                    <p>Topic: {{ $video->topic }}</p>
                </div>

                <video width="100%" height="500px" controls>
                    <source src="{{ url('storage/' . $video->video) }}" type="video/{{ $video->file_type }}">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>
    </div>
@endsection
