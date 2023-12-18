@extends('layouts.app_print')

<style>
    .button {
        padding: 10px 10px;
        border-radius: 5px;
        color: #fff;
    }

    @media print {

        /* Hide the buttons when printing */
        .print-only {
            display: none;
        }
    }
</style>

@section('content')
    <div class="card mt-4 mb-3 print-only">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Print {{ $class }} Student Result</h5>
                </div>
                <div class="col-auto">
                    <a href="/results" class="btn btn-primary" role="button">Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row my-4">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-body">
                    {{-- <table class="table mb-0 data-table fs--1" data-datatables="data-datatables"> --}}
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                {{-- <th class="text-900 sort">Q - ID</th> --}}
                                <th class="text-900 sort">ID</th>
                                <th class="text-900 sort">Name</th>
                                <th class="text-900 sort">Eng</th>
                                <th class="text-900 sort">Mat</th>
                                <th class="text-900 sort">Civ</th>
                                <th class="text-900 sort">Mak</th>
                                <th class="text-900 sort">Eco</th>
                                <th class="text-900 sort">Bio</th>
                                <th class="text-900 sort">Che</th>
                                <th class="text-900 sort">IRK</th>
                                <th class="text-900 sort">G.St</th>
                                <th class="text-900 sort">B.St</th>
                                <th class="text-900 sort">Gra</th>
                                <th class="text-900 sort">Com</th>
                                <th class="text-900 sort">Art</th>
                                <th class="text-900 sort">Sci</th>
                                <th class="text-900 sort">Agr</th>
                                <th class="text-900 sort">Ara</th>
                                <th class="text-900 sort">Had</th>
                                <th class="text-900 sort">Tef</th>
                                <th class="text-900 sort">Tao</th>
                                <th class="text-900 sort">Tar</th>
                                <th class="text-900 sort">Qaw</th>
                                <th class="text-900 sort">Fiq</th>
                                <th class="text-900 sort">Ada</th>
                                <th class="text-900 sort">Bal</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                                <tr>
                                    <td>{{ $result->student_id }}</td>
                                    <td>{{ $result->Name }}</td>
                                    {{-- <td>{{ $result->Class }}</td>
                                    <td>{{ $result->Term }}</td>
                                    <td>{{ $result->session }}</td> --}}
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

    <div style="margin-top: 1rem;  padding: 1rem; display: flex; gap: 10px;" class="print-only1">
        <button class="button" style="background: #0f4c5c;" onclick="printPage()">Print
            Result</button>
    </div>

    <script>
        function printPage() {
            // Exclude the button section from print
            document.querySelector('.print-only').style.display = 'none';
            document.querySelector('.print-only1').style.display = 'none';
            window.print();
            // Restore the button section after printing
            document.querySelector('.print-only').style.display = 'flex';
            document.querySelector('.print-only1').style.display = 'flex';
        }
    </script>
@endsection
