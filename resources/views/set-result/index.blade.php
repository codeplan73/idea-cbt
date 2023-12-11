@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Set Current Result</h5>
                </div>
            </div>
        </div>
    </div>
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

                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">Session</th>
                                <th class="text-900 sort">Term</th>
                                <th class="text-900 sort">Current Status</th>
                                <th class="text-900 sort">Announcement</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currentTerms as $cterm)
                                <tr>
                                    <td>{{ $cterm->Current_Session }}</td>
                                    <td>{{ $cterm->Current_Term }}</td>
                                    <td>{{ $cterm->Current_Status }}</td>
                                    <td>
                                        <summary>{{ $cterm->announcement }}</summary>
                                    </td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/set-result/{{ $cterm->ID }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
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
