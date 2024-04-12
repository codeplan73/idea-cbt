@extends('layouts.app_print')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="content">
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="row ">
                            <div class="col-12">
                                <div class="card font-sans-serif">
                                    <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center">
                                        <img src="
                                                {{ $student->Student_Image ? 'data:image/jpeg;base64,' . base64_encode($student->Student_Image) : asset('assets/img/no-image.jpg') }}"
                                            alt="" class="rounded-2" width="112">
                                        <table class="table table-borderless fs--1 fw-medium mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="p-1" style="width: 35%">Fullname:</td>
                                                    <td class="p-1 text-600">{{ $student->Fullnames }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1" style="width: 35%">Student ID:</td>
                                                    <td class="p-1 text-600">{{ $student->Student_ID }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1" style="width: 35%">Session:</td>
                                                    <td class="p-1">
                                                        {{ $student->Session_ }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1" style="width: 35%">Class:</td>
                                                    <td class="p-1">
                                                        {{ $student->Student_Class }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1" style="width: 35%">Section:</td>
                                                    <td class="p-1">
                                                        {{ $student->Student_Section }}
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row  g-2">
                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Entrance Fee:</h6>
                                <h6>{{ number_format($student->Entry_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Previous Debt:</h6>
                                <h6>{{ number_format($student->Previous_Debt_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Termly Fees:</h6>
                                <h6>{{ number_format($student->Termly_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>PTA/Development Fee:</h6>
                                <h6>{{ number_format($student->PTA_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Transportation Fee:</h6>
                                <h6>{{ number_format($student->Transport_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Enrollment Fee:</h6>
                                <h6>{{ number_format($student->Ext_Exam_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Hostel Fee:</h6>
                                <h6>{{ number_format($student->Boarding_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Graduation/Cert/Misc:</h6>
                                <h6>{{ number_format($student->Misc_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Comp. Based Test(CBT):</h6>
                                <h6>{{ number_format($student->Others_Fee, 2) }}</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="background: #003049;"
                                class="d-flex flex-row justify-content-between border px-2 py-1 my-1 rounded">
                                <h6 class="text-white fw-bold">TOTAL SCHOOL FEES:</h6>
                                <h6 class="text-white fw-bold">
                                    {{ number_format($student->Total_Sch_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 my-1 bg-white rounded">
                                <h6>Scholarship Fees:</h6>
                                <h6>{{ number_format($student->Scholarship_Fee, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 bg-white rounded">
                                <h6>General Discount:</h6>
                                <h6>{{ number_format($student->Gen_Discount, 2) }}</h6>
                            </div>
                            <div style="background: #003049;"
                                class="d-flex flex-row justify-content-between border px-2 py-1 rounded">
                                <h6 class="text-white fw-bold">AMOUNT PAYABLE:</h6>
                                <h6 class="text-white fw-bold">
                                    {{ number_format($student->Amount_Payable, 2) }}</h6>
                            </div>
                            <div class="d-flex flex-row justify-content-between border px-2 py-1 bg-white rounded">
                                <h6>Amount Paid:</h6>
                                <h6>{{ number_format($student->Amount_Paid, 2) }}</h6>
                            </div>
                            <div style="background: #0353a4;"
                                class="d-flex flex-row justify-content-between border px-2 py-1 rounded">
                                <h6 class="text-white fw-bold">TOTAL BALANCE:</h6>
                                <h6 class="text-white fw-bold">
                                    {{ number_format($student->Current_Balance, 2) }}</h6>
                            </div>
                            <div style="background: #03a439;"
                                class="d-flex flex-row justify-content-between border px-2 py-1 my-1 rounded">
                                <h6 class="text-white fw-bold">Student Result PIN:</h6>
                                <h6 class="text-white fw-bold">
                                    @if ($student->Student_Pin != 0)
                                        {{ $student->Student_Pin }}
                                    @endif
                                </h6>
                            </div>
                            <div style="background: #fff;"
                                class="d-flex flex-row justify-content-between px-2 py-1 my-1 rounded">
                                {{-- <textarea class="form-control" id="" readonly cols="30" rows="3">{{ $genInfo->GenInfo }}</textarea> --}}
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non eaque suscipit nostrum esse
                                odio veniam sit perferendis quasi, mollitia sapiente!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button id="printButton" onclick="window.print();" class="btn btn-primary mb-2  ">Print</button>
            <a id="backButton" href="/fees" class="btn btn-primary text-center" style="background: #0f4c5c;">Back</a>

            <style>
                @media print {

                    #backButton,
                    #printButton {
                        display: none;
                    }
                }
            </style>
        </div>
    </div>
@endsection
