@extends('layouts.app')

@section('content')
    <div class="mb-3 card">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Video Lessons</h5>
                </div>
                <div class="col-auto">
                    <a href="/video-create" class="btn btn-primary" role="button">Upload a Video</a>
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

    {{ $videos }}
@endsection
