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
                    <h5 class="mb-2 mb-md-0">Dashboard</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3 mb-3">
        <div class="col">
            <div class="card overflow-hidden">
                <div class="bg-holder bg-card"
                    style="background-image:url(../assets/img/icons/spot-illustrations/corner-2.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Hira-Iyakpi</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                        data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>{{ $iyakpi }}</div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden">
                <div class="bg-holder bg-card"
                    style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Hira-Ogbido</h6>
                    <div
                        class="display-4 fs-4 mb-2 fw-normal font-sans-serif"data-countup='{"endValue":43594,"prefix":"$"}'>
                        {{ $ogbido }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card overflow-hidden">
                <div class="bg-holder bg-card"
                    style="background-image:url(../assets/img/icons/spot-illustrations/corner-4.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Hira-Kogi</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif"
                        data-countup='{"endValue":43594,"prefix":"$"}'>
                        {{ $kogi }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden">
                <div class="bg-holder bg-card"
                    style="background-image:url(../assets/img/icons/spot-illustrations/corner-4.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Al-Amin Aviele</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif"
                        data-countup='{"endValue":43594,"prefix":"$"}'>
                        {{ $elamin }}
                    </div>
                </div>
            </div>
        </div>

        <!-- total gender -->
        <div class="col">
            <div class="card overflow-hidden">
                <div class="bg-holder bg-card"
                    style="background-image:url(../assets/img/icons/spot-illustrations/corner-5.png);">
                </div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Total Student</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif"
                        data-countup='{"endValue":43594,"prefix":"$"}'>
                        {{ $totalStudent }}
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                        <th class="text-900 sort">Balance</th>
                                        <th class="text-900 sort">Status</th>
                                        <th class="text-900 sort">Phone</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th class="text-900 sort">Result PIN</th>
                                            <th class="text-900 sort">Password</th>
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
                                            <td>{{ number_format($student->Current_Balance, 2) }}</td>
                                            <td>{{ $student->Current_Status }}</td>
                                            <td>{{ $student->Phone_Number }}</td>
                                            @if (auth()->user()->role == 'admin')
                                                <td>{{ $student->Student_Pin }}</td>
                                                <td>{{ $student->plain_password }}</td>
                                                <td class="text-end">
                                                    <div style="display: flex; align-items:center;">
                                                        <a href="/manage-student/{{ $student->id }}/edit"
                                                            class="btn btn-link p-0" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit">
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
                                            {{-- <th class="text-900 sort">Password</th> --}}
                                            <th class="text-900 sort">Phone</th>
                                            <th class="text-900 sort">Role</th>
                                            <th class="text-900 sort">Email</th>
                                            <th class="text-900 sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffs as $staff)
                                            <tr>
                                                <td>{{ $staff->Staff_ID }}</td>
                                                <td>{{ $staff->Fullname }}</td>
                                                {{-- <td>{{ $staff->plain_password }}</td> --}}
                                                <td>{{ $staff->Phone_No }}</td>
                                                <td>{{ $staff->role }}</td>
                                                <td>{{ $staff->Email }}</td>
                                                <td class="text-end">
                                                    @if (auth()->user()->role == 'admin')
                                                        <div style="display: flex; align-items:center;">
                                                            <a href="/staff/{{ $staff->id }}/edit"
                                                                class="btn btn-link p-0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Edit">
                                                                <span class="text-500 fas fa-edit"></span>
                                                            </a>
                                                            <form action="/staff/{{ $staff->id }}" method="post">
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
