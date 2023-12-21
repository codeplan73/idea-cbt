@extends('layouts.app')

@section('content')
    @if (session('message'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'SMS Sent!',
                    text: '{{ session('message') }}'
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'No Number',
                    text: '{{ session('error') }}'
                });
            });
        </script>
    @endif
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Send General Messages</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('sms.sendBulkSMS') }}" method="post">
                        @csrf
                        <!-- Form -->
                        <div class="row mb-4">
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="branch" class="form-label">Branch</label>

                                    <select class="js-select form-select @error('branch') is-invalid @enderror"
                                        name="branch">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->branch))
                                                <option value="{{ $sys->branch }}">{{ $sys->branch }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('branch')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="class" class="form-label">Class</label>

                                    <select class="js-select form-select @error('class') is-invalid @enderror"
                                        name="class">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->class))
                                                <option value="{{ $sys->class }}">{{ $sys->class }}
                                                </option>
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
                            <div class="col-sm-4 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="class" class="form-label">Status</label>

                                    <select class="js-select form-select @error('class') is-invalid @enderror"
                                        name="status">
                                        @foreach ($systems as $sys)
                                            @if (!empty($sys->student_status))
                                                <option value="{{ $sys->student_status }}">{{ $sys->student_status }}
                                                </option>
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

                            <div class="col-md-12 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="date" class="form-label">Message </label>

                                    <textarea type="text" class="form-control @error('date') is-invalid @enderror" name="message" placeholder="Message"
                                        rows="6"></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-info mt-4">Send General Messges</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
