@extends('layouts.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-md-0">Add Item</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'E-Note Dublicate!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">General Information </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('setup.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Form -->
                        <div class="row mb-4">
                            <div class="col-sm-6 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="title" class="form-label">Title </label>

                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="title" placeholder="title">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="date" class="form-label">Date </label>

                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        name="date" id="date" placeholder="date">
                                </div>
                            </div>

                            @include('components.file-upload-preview-setup')

                            @include('components.button', ['label' => 'Submit'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
