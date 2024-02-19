@extends('layouts.app')

@if (auth()->user()->Staff_Status !== 'Active')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Please contact the administrator to activate your portal',
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the logout form
                    document.getElementById('logout-form1').submit();
                }
            });
        });
    </script>

    <!-- Logout Form -->
    <form id="logout-form1" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endif


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
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Staff List</h5>
                </div>
            </div>
        </div>
    </div>


    @if (auth()->user()->role == 'admin')
        <hr>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row flex-between-end">
                            <div class="col-auto align-self-center">
                                <h5 class="mb-0" data-anchor="data-anchor" id="jquery-datatables-default-example">Staff
                                    List
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
                                            <th class="text-900 sort">Phone</th>
                                            <th class="text-900 sort">Role</th>
                                            <th class="text-900 sort">Status</th>
                                            <th class="text-900 sort">Email</th>
                                            <th class="text-900 sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffList as $staff)
                                            <tr>
                                                <td>{{ $staff->Staff_ID }}</td>
                                                <td>{{ $staff->Fullname }}</td>
                                                <td>{{ $staff->Phone_No }}</td>
                                                <td>{{ $staff->role }}</td>
                                                <td>{{ $staff->Staff_Status }}</td>
                                                <td>{{ $staff->Email }}</td>
                                                <td class="text-end">
                                                    @if (auth()->user()->role == 'admin')
                                                        <div style="display: flex; align-items:center;">
                                                            <a href="/staff/{{ $staff->ID }}/edit"
                                                                class="btn btn-link p-0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Edit">
                                                                <span class="text-500 fas fa-edit"></span>
                                                            </a>
                                                            <form action="/staff/{{ $staff->ID }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-link p-0 ms-2"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Delete"><span
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
            </div>
        </div>
    @endif
@endsection
