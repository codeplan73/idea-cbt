@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">General Information</h5>
                </div>
                <div class="col-auto">
                    <a href="/setup-create" class="btn btn-primary" role="button">Add Item
                    </a>
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
                                <th class="text-900 sort">Title</th>
                                <th class="text-900 sort">Date</th>
                                <th class="text-900 sort">Status</th>
                                <th class="text-900 sort">Preview</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($setups as $setup)
                                <tr>
                                    <td>{{ $setup->title }}</td>
                                    <td>{{ $setup->date }}</td>
                                    <td>{{ $setup->status }}</td>
                                    <td>{{ $setup->homepage_pdf }}</td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/setup/{{ $setup->id }}/edit" class="btn btn-link p-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/setup/{{ $setup->id }}" method="post">
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
@endsection
