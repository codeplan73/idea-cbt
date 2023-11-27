@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">E-Book Management</h5>
                </div>
                <div class="col-auto">
                    <a href="/book-create" class="btn btn-primary" role="button">Add E-Book
                    </a>
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
                    <h6 class="mb-0">Book information</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">Book ID</th>
                                <th class="text-900 sort">Subject</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->book_id }}</td>
                                    <td>{{ $book->subject }}</td>
                                    <td>{{ $book->class }}</td>
                                    <td>{{ $book->term }}</td>
                                    <td>{{ $book->session }}</td>
                                    <td class="text-end">
                                        @if ($book->staff_id === auth()->user()->Staff_ID || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/books/{{ $book->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/books/{{ $book->id }}" method="post">
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
