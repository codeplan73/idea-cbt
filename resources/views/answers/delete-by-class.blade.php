@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row g-0">
            <div class="col-lg-10 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Delete Answers By Class & Subject</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="row g-3" id="deleteForm" method="POST" action="{{ route('delete.deleteByClass') }}">
                            @csrf
                            <div class="row gx-2">
                                <div class="col-md-6 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="subject" class="form-label">Class</label>
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

                                <div class="col-md-6 mb-sm-0">
                                    <div class="tom-select-custom">
                                        <label for="subject" class="form-label">Subject</label>
                                        <select class="js-select form-select @error('subject') is-invalid @enderror"
                                            name="subject">
                                            @foreach ($systems as $sys)
                                                @if (!empty($sys->subject))
                                                    <option value="{{ $sys->subject }}">{{ $sys->subject }}</option>
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

                            </div>


                            <div class="col-12 d-flex justify-content-start">
                                <!-- Add an onclick event to call the confirmation function -->
                                <button class="btn btn-primary" type="button" onclick="confirmDeletion()">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
@endsection
