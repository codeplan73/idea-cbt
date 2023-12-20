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
                    <h6 class="mb-0">Send Bulk Message</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('sms.sendSingleSms') }}" method="post">
                        @csrf

                        <div class="row mb-4">

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="card-password">Phone Number</label>
                                <input name="phone_number" class="form-control  @error('phone_number') is-invalid @enderror"
                                    type="text" autocomplete="on" id="card-phone_number" />

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="message" class="form-label">Message </label>
                                    <textarea type="text" class="form-control @error('message') is-invalid @enderror" name="message"
                                        placeholder="Message" rows="6"></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-info mt-4">Send Messge</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
