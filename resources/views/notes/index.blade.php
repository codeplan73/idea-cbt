@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">E-Note Management</h5>
                </div>
                <div class="col-auto">
                    <a href="/note-create" class="btn btn-primary" role="button">Add E-Note
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
                    <h6 class="mb-0">Note information</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">Note ID</th>
                                <th class="text-900 sort">Week</th>
                                <th class="text-900 sort">Subject</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">Preview</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                                <tr>
                                    <td>{{ $note->note_id }}</td>
                                    <td>{{ $note->week }}</td>
                                    <td>{{ $note->subject }}</td>
                                    <td>{{ $note->class }}</td>
                                    <td>{{ $note->term }}</td>
                                    <td>{{ $note->session }}</td>
                                    <td>{{ $note->note_pdf }}</td>
                                    <td class="text-end d-flex gap-1 items-center">
                                        <a href="/notes/{{ $note->id }}/show" class="btn btn-link p-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Read">
                                            <i class="fa-brands fa-readme"></i>
                                        </a>

                                        @if ($note->staff_id === auth()->user()->Staff_ID || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/notes/{{ $note->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/notes/{{ $note->id }}" method="post">
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
