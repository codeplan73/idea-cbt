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
    @if (session('question_code'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Exam Code!',
                    text: '{{ session('question_code') }}'
                });
            });
        </script>
    @endif
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Exam Code information</h6>
                </div>
                <div class="card-body">
                    <form action="/question-code/{{ $questionCode->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <div class="col-sm-6 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_code" class="form-label">Class</label>
                                    <input type="text" class="form-control" readonly name="class" id="class"
                                        value="{{ $questionCode->class }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="question_code" class="form-label">Question Code</label>
                                    <input type="text" value="{{ $questionCode->question_code }}"
                                        class="form-control @error('question_code') is-invalid @enderror"
                                        name="question_code" id="question_code" placeholder="Question Code">
                                    @error('question_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        @include('components.button', ['label' => 'Update'])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
