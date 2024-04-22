@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Library Management</h5>
                </div>
                <div class="col-auto">
                    @if (auth()->user()->role == 'admin')
                        <a href="/library-create" class="btn btn-primary" role="button">Add E-Book to Library
                        </a>
                    @endif
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
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Unauthorized!',
                    text: '{{ session('error') }}'
                });
            });
        </script>
    @endif


    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Library information</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">Book ID</th>
                                <th class="text-900 sort">Name</th>
                                <th class="text-900 sort">Date</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($libraries as $library)
                                <tr>
                                    <td>{{ $library->library_id }}</td>
                                    <td>{{ $library->name }}</td>
                                    <td>{{ $library->date_ }}</td>
                                    <td class="text-end d-flex gap-1 items-center">
                                        <a href="/library/{{ $library->id }}/show" class="btn btn-link p-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Read"><i
                                                class="fa-brands fa-readme"></i>
                                        </a>

                                        @if (auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/library/{{ $library->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/library/{{ $library->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-link p-0 ms-2" data-bs-toggle="tooltip"
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
