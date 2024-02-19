@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="mb-3 card">
                <div class="card-header bg-body-tertiary">
                    <h5 class="mb-2">Video Lesson Details</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4 row">
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <div class="">
                                    <label for="topic" class="form-label">Topic </label>
                                    <p>{{ $video->topic }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="subject" class="form-label">Subject</label>
                                <p>{{ $video->subject }}</p>
                            </div>
                        </div>
                        <div class="col mb-sm-0">
                            <div class="tom-select-custom">
                                <label for="class" class="form-label">Class</label>
                                <p>{{ $video->class }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            {{-- <video width="100%" height="500px" controls>
                                <source src="{{ url('storage/' . $video->video) }}" type="video/{{ $video->file_type }}">
                                Your browser does not support the video tag.
                            </video> --}}


                            <video width="100%" height="500px" controls>
                                <source src="{{ url('storage/' . $video->video) }}" type="video/mp4">
                                <source src="{{ url('storage/' . $video->video) }}" type="video/webm">
                                <source src="{{ url('storage/' . $video->video) }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection