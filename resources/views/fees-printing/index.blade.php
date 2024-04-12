@extends('layouts.app')

@section('content')

    {{-- student list --}}
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
                                        <th class="text-900 sort">Status</th>
                                        <th class="text-900 sort">Phone</th>
                                        <th class="text-900 sort">Balance</th>
                                        <th class="text-900 sort">Action</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->Student_ID }}</td>
                                            <td>{{ $student->Fullnames }}</td>
                                            <td>{{ $student->Student_Class }}</td>
                                            <td>{{ $student->Current_Status }}</td>
                                            <td>{{ $student->Phone_Number }}</td>
                                            <td>{{ number_format($student->Current_Balance, 2) }}</td>
                                        
                                                <td class="text-end">
                                                    <div style="display: flex; align-items:center;">
                                                        <a href="/show-student-fees/{{ $student->ID }}/show"
                                                            class="btn btn-link p-0" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Show">
                                                            <span class="text-500 fas fa-print"></span>
                                                        </a>
                                                       
                                                    </div>
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

   
    @endsection