@extends('layouts.app')

@if (session('message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'info',
                title: 'Good!',
                text: '{{ session('message') }}'
            })
        });
    </script>
@endif

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row flex-between-end">
                        <div class="col-auto align-self-center">
                            <h5 class="mb-0" data-anchor="data-anchor" id="jquery-datatables-default-example">Student List
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content">
                        <div class="tab-pane preview-tab-pane active" role="tabpanel"
                            aria-labelledby="tab-dom-dbc909e0-e4bb-4720-88ee-816db2a3f385"
                            id="dom-dbc909e0-e4bb-4720-88ee-816db2a3f385">

                            <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                                <thead class="bg-200">
                                    <tr>
                                        <th class="text-900 sort">ID</th>
                                        <th class="text-900 sort">Name</th>
                                        <th class="text-900 sort">Class</th>
                                        <th class="text-900 sort">Password</th>
                                        <th class="text-900 sort">Status</th>
                                        <th class="text-900 sort">Phone</th>
                                        <th class="text-900 sort">Result PIN</th>
                                        <th class="text-900 sort">Balance</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th class="text-900 sort">Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->Student_ID }}</td>
                                            <td>{{ $student->Fullnames }}</td>
                                            <td>{{ $student->Student_Class }}</td>
                                            <td>{{ $student->Plain_Password }}</td>
                                            <td>{{ $student->Current_Status }}</td>
                                            <td>{{ $student->Phone_Number }}</td>
                                            <td>{{ $student->Student_Pin }}</td>
                                            <td>{{ number_format($student->Current_Balance, 2) }}</td>
                                            @if (auth()->user()->role == 'admin')
                                                <td class="text-end">
                                                    <div style="display: flex; align-items:center;">
                                                        <a href="/manage-student/{{ $student->ID }}/edit"
                                                            class="btn btn-link p-0" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit">
                                                            <span class="text-500 fas fa-edit"></span>
                                                        </a>
                                                        <form action="/manage-student/{{ $student->ID }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-link p-0 ms-2" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete"><span
                                                                    class="text-500 fas fa-trash-alt"></span></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
