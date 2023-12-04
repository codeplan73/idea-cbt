@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Manage Answers</h5>
                </div>
            </div>
        </div>
    </div>
    @include('components.form-alert-info')
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('error') }}'
                });
            });
        </script>
    @endif
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Not Found!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif


    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Answer information</h6>
                </div>
                <div class="card-body">
                    <h5 class="mb-0">Search</h4>
                        <hr>
                        <form action="/search-answers" method="post">
                            @csrf
                            <div class="row mb-5">
                                <div class="col-md-6 tom-select-custom">
                                    <label for="subject" class="form-label">Class</label>
                                    <select class="js-select form-select" name="class">
                                        <option value="">Select Class</option>
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

                                <div class="col-md-6">
                                    <label for="class">Exam-ID:</label>
                                    <input type="text" name="examId" required class="form-control"
                                        placeholder="Enter Exam-ID">
                                </div>
                                <div class="absolute top-2 right-2">
                                    <button type="submit" class="btn btn-info mt-2">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </form>


                        <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                            <thead class="bg-200">
                                <tr>
                                    <th class="text-900 sort">Exam-ID</th>
                                    <th class="text-900 sort">Stud-ID</th>
                                    <th class="text-900 sort">Name</th>
                                    <th class="text-900 sort">Cleas</th>
                                    <th class="text-900 sort">Term</th>
                                    <th class="text-900 sort">Subject</th>
                                    <th class="text-900 sort">Q-Type</th>
                                    <th class="text-900 sort">E-Type</th>
                                    <th class="text-900 sort">Score</th>
                                    <th class="text-900 sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($answers as $answer)
                                    <tr>
                                        <td>{{ $answer->exam_id }}</td>
                                        <td>{{ $answer->student_id }}</td>
                                        <td>{{ $answer->name }}</td>
                                        <td>{{ $answer->class }}</td>
                                        <td>{{ $answer->term }}</td>
                                        <td>{{ $answer->subject }}</td>
                                        <td>{{ $answer->question_type }}</td>
                                        <td>{{ $answer->exam_type }}</td>
                                        <td>{{ $answer->score }}</td>
                                        <td class="text-end">
                                            @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                                <div style="display: flex; align-items:center;">
                                                    <a href="/answers/{{ $answer->id }}/edit" class="btn btn-link p-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <span class="text-500 fas fa-edit"></span>
                                                    </a>
                                                    <form action="/answers/{{ $answer->id }}" method="post">
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get the table
            var dataTable = $('.data-table').DataTable();

            // Add event listeners to the search boxes
            $('#examId, #class').on('keyup', function() {
                // Get the values from the search boxes
                var examId = $('#examId').val().toLowerCase();
                var classValue = $('#class').val().toLowerCase();

                // Perform the search
                dataTable.search(examId + ' ' + classValue).draw();
            });
        });
    </script>
@endsection
