@extends('layouts.app')

@section('content')
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
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Edit Information</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">System Information</h6>
                </div>
                <div class="card-body">

                    <form action="/cms/{{ $system[0]->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-4 gap-3">
                            <div class="col-md-5 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="school_name" class="form-label">School Name </label>

                                    <input type="text" value="{{ $system[0]->school_name }}"
                                        class="form-control @error('class') is-invalid @enderror" name="school_name"
                                        id="school_name" placeholder="School Name">

                                    @error('school_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="school_motto" class="form-label">Motto</label>
                                    <input type="text" value="{{ $system[0]->school_motto }}" class="form-control"
                                        name="school_motto" id="school_motto" placeholder="school motto">

                                    @error('school_motto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="tom-select-custom">
                                        <label for="school_logo" class="form-label">School Logo</label>
                                        <input type="file" class="form-control" name="school_logo" id="school_logo"
                                            placeholder="school_logo">
                                        @error('school_logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <img src="{{ url('storage/' . $system[0]->school_logo) }}" class="img-fluid rounded"
                                        alt="school logo" style="height: 100px;" />
                                </div>
                            </div>

                            <hr>
                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">Hero Section</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="school_hero_title" class="form-label">Title</label>
                                        <textarea type="text" class="form-control" name="school_hero_title" id="school_hero_title" placeholder="Title">{{ $system[0]->school_hero_title }}</textarea>

                                        @error('school_hero_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="school_hero_text" class="form-label">Text</label>
                                        <textarea type="text" class="form-control" name="school_hero_text" id="school_hero_text" placeholder="text">{{ $system[0]->school_hero_text }}</textarea>

                                        @error('school_hero_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-sm-0">
                                        <div class="tom-select-custom mt-2">
                                            <label for="school_about_images" class="form-label">Hero Image</label>
                                            <input type="file" class="form-control" name="school_about_images"
                                                id="school_about_images" placeholder="school_about_images" multiple>


                                            @error('school_about_images')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-sm-0 mt-2"> <img
                                            src="{{ url('storage/' . $system[0]->school_about_images) }}"
                                            class="img-fluid rounded" alt="school logo" style="height: 100px;" /></div>
                                </div>
                            </div>

                            <hr>


                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">About Section</h6>
                            </div>
                            <div class="row">

                                <div class="col-md-12 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_address" class="form-label">About Title</label>
                                        <textarea type="text" class="form-control" name="school_about_title" id="school_address">{{ $system[0]->school_about_title }}</textarea>

                                        @error('school_about_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_address" class="form-label">About Text</label>
                                        <textarea type="text" class="form-control" name="school_about_text" id="school_address">{{ $system[0]->school_about_text }}</textarea>

                                        @error('school_about_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_phone" class="form-label">About Images</label>

                                    </div>
                                </div>

                            </div>


                            <hr>


                            <div class="card-header bg-body-tertiary">
                                <h6 class="mb-0">Contact Section</h6>
                            </div>
                            <div class="row">

                                <div class="col-md-12 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_address" class="form-label">Address</label>
                                        <textarea type="text" class="form-control" name="school_address" id="school_address" placeholder="Address">{{ $system[0]->school_address }}</textarea>

                                        @error('school_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_email" class="form-label text-left">Email
                                            <br> <small>(You can
                                                enter
                                                more than 1 email separated with coma ,)</small></label>
                                        <input type="text" value="{{ $system[0]->school_email }}"
                                            class="form-control" name="school_email" id="school_email"
                                            placeholder="email">

                                        @error('school_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_phone" class="form-label">Phone Number <br> <small>(You can
                                                enter
                                                more than 1 number separated with coma ,)</small></label>
                                        <input type="text" value="{{ $system[0]->school_phone }}"
                                            class="form-control" name="school_phone" id="school_phone"
                                            placeholder="Phone">


                                        @error('school_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_website" class="form-label">Website</label>
                                        <input type="text" value="{{ $system[0]->school_website }}"
                                            class="form-control" name="school_website" id="school_website"
                                            placeholder="Website">

                                        @error('school_website')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_open_hours" class="form-label">Opening Days</label>
                                        <input type="text" value="{{ $system[0]->school_open_hours }}"
                                            class="form-control" name="school_open_hours" id="school_open_hours"
                                            placeholder="Open Days">

                                        @error('school_open_hours')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="tom-select-custom">
                                        <label for="school_close_hours" class="form-label">Opening Hours</label>
                                        <input type="text" value="{{ $system[0]->school_close_hours }}"
                                            class="form-control" name="school_close_hours" id="school_close_hours"
                                            placeholder="Opening Hours">

                                        @error('school_close_hours')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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


    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Upload About Images</h6>
                </div>
                <div class="card-body">

                    <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                        <thead class="bg-200">
                            <tr>
                                <th class="text-900 sort">Images</th>
                                <th class="text-900 sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about as $about)
                                <tr>
                                    <td> <img src="{{ url('storage/' . $about->about_images) }}"
                                            class="img-fluid rounded" style="height: 100px;" /></td>

                                    <td class="text-end">
                                        @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                            <div style="display: flex; align-items:center;">
                                                <form action="/cms-about/{{ $about->id }}" method="post">
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


                    <br>
                    <hr>
                    <form action="{{ route('cms-about-upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-sm-0">
                                <div class="tom-select-custom mt-2">
                                    <label for="school_about_images" class="form-label">About Image</label>
                                    <input type="file" class="form-control" name="school_about_images"
                                        id="school_about_images" required>


                                    @error('school_about_images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-info btn-block">Upload Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
