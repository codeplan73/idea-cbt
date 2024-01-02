@extends('layouts.app')

@section('content')
    <div class="mb-3 card">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Video Lessons</h5>
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
        <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Form -->
            <div class="mb-4 row gx-3 gy-3">
                <div class="mb-2 col-sm-12 mb-sm-0">
                    <div class="tom-select-custom">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            id="title" placeholder="title">
                        @error('title')
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
                            name="start_date" id="start_date" placeholder="start_date">
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
                            name="start_time" id="start_time" placeholder="start_time">
                        @error('start_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                @include('components.video-upload-preview')

                @include('components.button', ['label' => 'Submit'])
            </div>
        </form>
    </div>
@endsection
