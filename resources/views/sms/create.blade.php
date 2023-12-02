@extends('layouts.app')

@section('content')
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
                    <h6 class="mb-0">Send Bulk Message</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('sms.sendBulkSMS') }}" method="post">
                        @csrf
                        <!-- Form -->
                        <div class="row mb-4">

                            <div class="col-md-12 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="date" class="form-label">Message </label>

                                    <textarea type="text" class="form-control @error('date') is-invalid @enderror" name="message" placeholder="Message"
                                        rows="6"></textarea>
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
