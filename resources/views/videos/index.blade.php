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

    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3 card">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Video Lessson List</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">Topic</th>
                                <th class="text-900 sort">Subject</th>
                                <th class="text-900 sort">Week</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Video</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>{{ $video->topic }}</td>
                                    <td>{{ $video->subject }}</td>
                                    <td>{{ $video->week }}</td>
                                    <td>{{ $video->class }}</td>
                                    <td>{{ $video->video }}</td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/videos/{{ $video->id }}/edit" class="p-0 btn btn-link"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/videos/{{ $video->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="p-0 btn btn-link ms-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete"><span
                                                            class="text-500 fas fa-trash-alt"></span></button>
                                                </form>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
