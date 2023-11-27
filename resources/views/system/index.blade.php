@extends('layouts.app')

@section('content')
    {{-- <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">System Management</h5>
                </div>
                <div class="col-auto">
                    <a href="/system-create" class="btn btn-primary" role="button">Add Item
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
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
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Basic information</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">SYS-ID</th>
                                <th class="text-900 sort">Branch</th>
                                <th class="text-900 sort">Staff Status</th>
                                <th class="text-900 sort">Stud Status</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Subject</th>
                                <th class="text-900 sort">E-Tyep</th>
                                <th class="text-900 sort">Q-Type</th>
                                <th class="text-900 sort">Week</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($systems as $system)
                                <tr>

                                    {{-- <td>{{ $system->mem_id }}</td> --}}
                                    <td>{{ $system->system_id }}</td>
                                    <td>{{ $system->branch }}</td>
                                    <td>{{ $system->staff_status }}</td>
                                    <td>{{ $system->student_status }}</td>
                                    <td>{{ $system->term }}</td>
                                    <td>{{ $system->session }}</td>
                                    <td>{{ $system->class }}</td>
                                    <td>{{ $system->subject }}</td>
                                    <td>{{ $system->exam_type }}</td>
                                    <td>{{ $system->question_type }}</td>
                                    <td>{{ $system->week }}</td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/system/{{ $system->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/system/{{ $system->id }}" method="post">
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



    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Basic information</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('system.store') }}" method="post">
                        @csrf
                        <!-- Form -->

                        <div class="row mb-4">
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Subject </label>

                                    <input type="text" class="form-control @error('class') is-invalid @enderror"
                                        name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="branch" class="form-label">Branch</label>
                                    <input type="text" class="form-control" name="branch" id="branch"
                                        placeholder="Branch">
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Session</label>
                                    <input type="text" class="form-control" name="session" id="session"
                                        placeholder="Session">
                                </div>
                            </div>

                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Student Status</label>
                                    <select class="js-select form-select" name="student_status">
                                        <option value=""></option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Graduated">Graduated</option>
                                        <option value="Left">Left</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Staff Status</label>
                                    <select class="js-select form-select" name="staff_status">
                                        <option value=""></option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Sacked">Sacked</option>
                                        <option value="Resigned">Resigned</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Class</label>
                                    <select class="js-select form-select" name="class">
                                        <option value=""></option>
                                        <option value="Creche">Crech</option>
                                        <option value="Pre-KG">Pre KG</option>
                                        <option value="KG1">KG1</option>
                                        <option value="KG2">KG2</option>
                                        <option value="KG3">KG3</option>
                                        <option value="Pry1">Pry1</option>
                                        <option value="Pry2">Pry2</option>
                                        <option value="Pry3">Pry3</option>
                                        <option value="Pry4">Pry4</option>
                                        <option value="Pry5">Pry5</option>
                                        <option value="Pry6">Pry6</option>
                                        <option value="Pre-JSS">Pre JSS</option>
                                        <option value="JSS1">JSS1</option>
                                        <option value="JSS2">JSS2</option>
                                        <option value="JSS3">JSS3</option>
                                        <option value="SS1">SS1</option>
                                        <option value="SS2">SS2</option>
                                        <option value="SS3">SS3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Term</label>
                                    <select class="js-select form-select" name="term">
                                        <option value=""></option>
                                        <option value="1st-Term">1st-Term</option>
                                        <option value="2nd-Term">2nd-Term</option>
                                        <option value="3rd-Term">3rd-Term</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_type" class="form-label">Question Type</label>
                                    <select class="js-select form-select" name="question_type">
                                        <option value=""></option>
                                        <option value="Objective">Objective</option>
                                        <option value="Theory">Theory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="exam_type" class="form-label">Exam Type</label>
                                    <select class="js-select form-select" name="exam_type">
                                        <option value=""></option>
                                        <option value="Test-1">Test-1</option>
                                        <option value="Test-2">Test-2</option>
                                        <option value="Test-3">Test-3</option>
                                        <option value="Exam">Exam</option>
                                        <option value="Theory">Theory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="subject" class="form-label">Week</label>
                                    <select class="js-select form-select" name="week">
                                        <option value=""></option>
                                        <option value="WK-1">WK-1</option>
                                        <option value="WK-2">WK-2</option>
                                        <option value="WK-3">WK-3</option>
                                        <option value="WK-4">WK-4</option>
                                        <option value="WK-5">WK-5</option>
                                        <option value="WK-6">WK-6</option>
                                        <option value="WK-7">WK-7</option>
                                        <option value="WK-8">WK-8</option>
                                        <option value="WK-9">WK-9</option>
                                        <option value="WK-10">WK-10</option>
                                        <option value="WK-11">WK-11</option>
                                        <option value="WK-12">WK-12</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="">
                            <button type="submit" class="btn btn-info btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
