@extends('layouts.app')

@section('content')
    <div class="mb-3 card">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Edit Video Lessons</h5>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Good job!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif




    <div class="card-body">
        <form action="/videos/{{ $video->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Form -->
            <div class="mb-4 row gx-3 gy-3">
                <div class="mb-2 col-sm-12 mb-sm-0">
                    <div class="tom-select-custom">
                        <label for="topic" class="form-label">Topic</label>
                        <input type="text" class="form-control @error('topic') is-invalid @enderror"
                            value="{{ $video->topic }}" name="topic" id="topic" placeholder="topic">
                        @error('topic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-sm-0">
                    <div class="tom-select-custom">
                        <div class="">
                            <label for="subject" class="form-label">Subject </label>
                            <select class="js-select form-select @error('subject') is-invalid @enderror" name="subject">
                                <option value="{{ $video->subject }}">{{ $video->subject }}</option>
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
                        <label for="week" class="form-label">Week</label>
                        <select class="js-select form-select @error('week') is-invalid @enderror" name="week">
                            <option value="{{ $video->week }}">{{ $video->week }}</option>
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

                <div class="col-sm-6 mb-sm-0">
                    <div class="tom-select-custom">
                        <label for="class" class="form-label">Class</label>
                        <select class="js-select form-select @error('class') is-invalid @enderror" name="class">
                            <option value="{{ $video->class }}">{{ $video->class }}</option>
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
                        <label for="term" class="form-label">Term</label>
                        <select class="js-select form-select @error('term') is-invalid @enderror" name="term">
                            <option value="{{ $video->term }}">{{ $video->term }}</option>
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



                <div class="mb-2 col-sm-6 mb-sm-0">
                    <div class="tom-select-custom">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                            name="start_date" value="{{ $video->start_date }}" id="start_date" placeholder="start_date">
                        @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-2 col-sm-6 mb-sm-0">
                    <div class="tom-select-custom">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input type="time" class="form-control @error('start_time') is-invalid @enderror"
                            name="start_time" id="start_time" value="{{ $video->start_time }}" placeholder="start_time">
                        @error('start_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                @include('components.video-upload-preview')

                @include('components.button', ['label' => 'Update Lesson'])
            </div>
        </form>
    </div>
@endsection
