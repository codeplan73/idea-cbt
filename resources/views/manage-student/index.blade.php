@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Manage Student</h5>
                </div>
                <div class="col-auto">
                    <a href="/manage-create" class="btn btn-primary" role="button">Add Student Account
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('components.form-alert')


    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Student information</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                {{-- <th class="text-900 sort">Q - ID</th> --}}
                                <th class="text-900 sort">Student - ID</th>
                                <th class="text-900 sort">Fullnames</th>
                                <th class="text-900 sort">Status</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Branch</th>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">Phone</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->Student_ID }}</td>
                                    <td>{{ $student->Fullnames }}</td>
                                    <td>{{ $student->Current_Status }}</td>
                                    <td>{{ $student->Student_Class }}</td>
                                    <td>{{ $student->Branch }}</td>
                                    <td>{{ $student->Session_ }}</td>
                                    <td>{{ $student->Phone_Number }}</td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/manage-student/{{ $student->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/manage-student/{{ $student->id }}" method="post">
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
