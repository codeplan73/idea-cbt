@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Exam Code Management</h5>
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
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Fix Exam Code</h6>
                </div>
                <div class="card-body">
                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">ID</th>
                                <th class="text-900 sort">Class</th>
                                <th class="text-900 sort">Code</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questionCodes as $questionCode)
                                <tr>
                                    <td>{{ $questionCode->id }}</td>
                                    <td>{{ $questionCode->class }}</td>
                                    <td>{{ $questionCode->question_code }}</td>
                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <a href="/question-code/{{ $questionCode->id }}/edit"
                                                    class="btn btn-link p-0" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit">
                                                    <span class="text-500 fas fa-edit"></span>
                                                </a>
                                                <form action="/question-code/{{ $questionCode->id }}" method="post">
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
                    <h6 class="mb-0">Create Class</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('question-code.store') }}" method="post">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-sm-6 col-md-6 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="class" class="form-label">Class</label>
                                    <select class="js-select form-select @error('class') is-invalid @enderror"
                                        name="class">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->class))
                                                <option value="{{ $sys->class }}">{{ $sys->class }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('class')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 mb-6 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_code" class="form-label">Question Code</label>
                                    <input type="text" class="form-control @error('question_code') is-invalid @enderror"
                                        name="question_code" value="{{ old('question_code') }}"
                                        placeholder="Question Code">
                                    @error('question_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @include('components.button', ['label' => 'Submit'])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
