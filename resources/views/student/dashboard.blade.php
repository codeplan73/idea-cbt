@extends('layouts.app_student')

<script>
    // Disable going back using browser navigation
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function() {
        history.pushState(null, null, document.URL);
    });
</script>

@section('content')
    <div class="content">

        @auth('student')
            @if (auth()->guard('student')->user()->Current_Status !== 'Active')
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'info',
                            title: 'Congratulations!',
                            text: '{{ session('exammessage') }}'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Log the user out
                                window.location.href = '/student-logout'; // Replace with your logout URL
                                window.history.forward();
                            }
                        });

                        // Log out the student when clicking anywhere on the page
                        document.addEventListener('click', function() {
                            window.location.href = '/student-logout'; // Replace with your logout URL
                            window.history.forward();
                        });
                    });
                </script>
            @endif
        @endauth


        @if (session('exammessage'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'info',
                        title: 'Congratulations!',
                        text: '{{ session('exammessage') }}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Log the user out
                            window.location.href = '/student-logout'; // Replace with your logout URL
                            window.history.forward();
                        }
                    });
                });
            </script>
        @endif
        @if (session('noexam'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'info',
                        title: 'No Test/Exam!',
                        text: '{{ session('noexam') }}'
                    })
                    // .then((result) => {
                    //     if (result.isConfirmed) {
                    //         // Log the user out
                    //         window.history.forward();
                    //         window.location.href = '/student-logout'; // Replace with your logout URL
                    //     }
                    // });
                });
            </script>
        @endif
        @if (Auth::guard('student')->user()->Current_Status == 'Inactive')
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Please contact the administrator to activate your portal',
                        confirmButtonText: 'OK',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Log the user out
                            window.location.href = '/student-logout'; // Replace with your logout URL
                            window.history.forward();
                        }
                    });
                });
            </script>
        @endif
        @if (session('timeup'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Exam Closed!',
                        text: '{{ session('timeup') }}'
                    });
                });
            </script>
        @endif

        <div class="card mb-3">
            <div class="card-body d-flex flex-wrap flex-between-center">
                <div>
                    <h6 class="text-primary">Student</h6>
                    <h5 class="mb-0">{{ auth()->guard('student')->user()->Fullnames }}</h5>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-xxl-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="card font-sans-serif">
                            <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center">
                                <img src="
                                        {{ Auth::user()->Student_Image ? 'data:image/jpeg;base64,' . base64_encode(Auth::guard('student')->user()->Student_Image) : asset('assets/img/no-image.jpg') }}"
                                    alt="" class="rounded-2" width="112">
                                <table class="table table-borderless fs--1 fw-medium mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="p-1" style="width: 35%">Fullname:</td>
                                            <td class="p-1 text-600">{{ auth()->guard('student')->user()->Fullnames }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%">Student ID:</td>
                                            <td class="p-1 text-600">{{ auth()->guard('student')->user()->Student_ID }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%">Session:</td>
                                            <td class="p-1">
                                                {{ auth()->guard('student')->user()->Session_ }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%">Class:</td>
                                            <td class="p-1">
                                                {{ auth()->guard('student')->user()->Student_Class }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-1" style="width: 35%">Section:</td>
                                            <td class="p-1">
                                                {{ auth()->guard('student')->user()->Student_Section }}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Entrance Fee:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Entry_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Previous Debt:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Previous_Debt_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Termly Fees:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Termly_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>PTA/Development Fee:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->PTA_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Transportation Fee:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Transport_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Enrollment Fee:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Ext_Exam_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Hostel Fee:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Boarding_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Graduation/Cert/Misc:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Misc_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Comp. Based Test(CBT):</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Others_Fee,2) }}</h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #003049;"
                        class="d-flex flex-row justify-content-between border px-2 py-1 my-1 rounded">
                        <h6 class="text-white fw-bold">TOTAL SCHOOL FEES:</h6>
                        <h6 class="text-white fw-bold">
                            {{ number_format(auth()->guard('student')->user()->Total_Sch_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Scholarship Fees:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Scholarship_Fee,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>General Discount:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Gen_Discount,2) }}</h6>
                    </div>
                    <div style="background: #003049;"
                        class="d-flex flex-row justify-content-between border px-2 py-1 my-1 rounded">
                        <h6 class="text-white fw-bold">AMOUNT PAYABLE:</h6>
                        <h6 class="text-white fw-bold">
                            {{ number_format(auth()->guard('student')->user()->Amount_Payable,2) }}</h6>
                    </div>
                    <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                        <h6>Amount Paid:</h6>
                        <h6>{{ number_format(auth()->guard('student')->user()->Amount_Paid,2) }}</h6>
                    </div>
                    <div style="background: #0353a4;"
                        class="d-flex flex-row justify-content-between border px-2 py-1 my-1 rounded">
                        <h6 class="text-white fw-bold">TOTAL BALANCE:</h6>
                        <h6 class="text-white fw-bold">
                            {{ number_format(auth()->guard('student')->user()->Current_Balance,2) }}</h6>
                    </div>
                    <div style="background: #03a439;"
                        class="d-flex flex-row justify-content-between border px-2 py-1 my-1 rounded">
                        <h6 class="text-white fw-bold">Student Result PIN:</h6>
                        <h6 class="text-white fw-bold">
                            @if (auth()->guard('student')->user()->Student_Pin != 0)
                                {{ auth()->guard('student')->user()->Student_Pin }}
                            @endif
                        </h6>
                    </div>
                    <div style="background: #fff;" class="d-flex flex-row justify-content-between px-2 py-1 my-1 rounded">
                        <textarea class="form-control" id="" readonly cols="30" rows="2">{{ $genInfo->GenInfo }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Not Allowed!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif
    </div>
@endsection
