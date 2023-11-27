@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Student Result Portal</h5>
                </div>
            </div>
        </div>
    </div>
    @include('components.form-alert')


    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                {{-- <th class="text-900 sort">Q - ID</th> --}}
                                <th class="text-900 sort">ID</th>
                                <th class="text-900 sort">Name</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">English</th>
                                <th class="text-900 sort">Maths</th>
                                <th class="text-900 sort">Civic</th>
                                <th class="text-900 sort">Mark</th>
                                <th class="text-900 sort">Econs</th>
                                <th class="text-900 sort">Bio</th>
                                <th class="text-900 sort">Chem</th>
                                <th class="text-900 sort">IRK</th>
                                <th class="text-900 sort">Gen.Stud</th>
                                <th class="text-900 sort">Bus.Stud</th>
                                <th class="text-900 sort">Gram</th>
                                <th class="text-900 sort">Comp</th>
                                <th class="text-900 sort">C.Art</th>
                                <th class="text-900 sort">Science</th>
                                <th class="text-900 sort">Agric</th>
                                <th class="text-900 sort">Arabic</th>
                                <th class="text-900 sort">Hadith</th>
                                <th class="text-900 sort">Tefseer</th>
                                <th class="text-900 sort">Taoheed</th>
                                <th class="text-900 sort">Tarikh</th>
                                <th class="text-900 sort">Qawaid</th>
                                <th class="text-900 sort">Fiqh</th>
                                <th class="text-900 sort">Adab</th>
                                <th class="text-900 sort">Balaga</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                                <tr>
                                    <td>{{ $result->student_id }}</td>
                                    <td>{{ $result->Name }}</td>
                                    <td>{{ $result->Class }}</td>
                                    <td>{{ $result->Term }}</td>
                                    <td>{{ $result->session }}</td>
                                    <td>{{ $result->English }}</td>
                                    <td>{{ $result->Maths }}</td>
                                    <td>{{ $result->Civic }}</td>
                                    <td>{{ $result->Marketing }}</td>
                                    <td>{{ $result->Economics }}</td>
                                    <td>{{ $result->Biology }}</td>
                                    <td>{{ $result->Chemistry }}</td>
                                    <td>{{ $result->Islamic_Stud }}</td>
                                    <td>{{ $result->Gen_Stud }}</td>
                                    <td>{{ $result->Business_Stud }}</td>
                                    <td>{{ $result->Grammer }}</td>
                                    <td>{{ $result->Computer }}</td>
                                    <td>{{ $result->C_Arts }}</td>
                                    <td>{{ $result->Basic_Sc }}</td>
                                    <td>{{ $result->Agric_Sc }}</td>
                                    <td>{{ $result->Arabic }}</td>
                                    <td>{{ $result->Hadith }}</td>
                                    <td>{{ $result->Tefseer }}</td>
                                    <td>{{ $result->Taoheed }}</td>
                                    <td>{{ $result->Tarikh }}</td>
                                    <td>{{ $result->Qawaid }}</td>
                                    <td>{{ $result->Fiqh }}</td>
                                    <td>{{ $result->Adab }}</td>
                                    <td>{{ $result->Balaga }}</td>
                                    <td class="text-end">
                                        @if (auth()->user()->role === 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/results/{{ $result->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form id="deleteForm" action="/results/{{ $result->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-link p-0 ms-2" onclick="confirmDeletion()"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Delete"><span
                                                            class="text-500 fas fa-trash-alt"></span></button>
                                                </form>
                                                <script>
                                                    function confirmDeletion() {
                                                        // Use a JavaScript confirmation dialog
                                                        var confirmation = window.confirm("Are you sure you want to delete?");

                                                        // If the user confirms, submit the form
                                                        if (confirmation) {
                                                            document.getElementById('deleteForm').submit();
                                                        }
                                                    }
                                                </script>
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
