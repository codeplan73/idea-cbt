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
                    <h6 class="mb-0">Send Individual Message</h6>
                </div>
                <div class="card-body">
                    <div class="row gy-4 mb-4">
                        <div class="col-md-12">
                            <form action="{{ route('sms.sendSingleSms') }}" method="post">
                                @csrf
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="card-password">Phone Number</label>
                                    <input name="phone_number"
                                        class="form-control  @error('phone_number') is-invalid @enderror" type="text"
                                        autocomplete="on" placeholder="234xxxxxxx" id="card-phone_number" />

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
                                    <button type="submit" class="btn btn-block btn-info mt-4">Send Individual
                                        Messge</button>
                                </div>
                            </form>

                            <hr>
                            <div class="mt-4">
                                <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                                    <thead class="bg-200">
                                        <tr>
                                            {{-- <th class="text-900 sort">Type</th> --}}
                                            <th class="text-900 sort">Message</th>
                                            <th class="text-900 sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                {{-- <td>{{ $message->type }}</td> --}}
                                                <td>{{ $message->message }}</td>
                                                <td class="text-end">

                                                    <div style="display: flex; align-items:center;">

                                                        <form action="/sms/{{ $message->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-link p-0 ms-2" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete"><span
                                                                    class="text-500 fas fa-trash-alt"></span></button>
                                                        </form>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr>

                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table mb-0 data-table fs--1" data-datatables="data-datatables">
                                    <thead class="bg-200">
                                        <tr>
                                            <th class="text-900 sort">ID</th>
                                            <th class="text-900 sort">Name</th>
                                            <th class="text-900 sort">Class</th>
                                            <th class="text-900 sort">Phone</th>
                                            <th class="text-900 sort">Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->Student_ID }}</td>
                                                <td>{{ $student->Fullnames }}</td>
                                                <td>{{ $student->Student_Class }}</td>
                                                <td>{{ $student->Phone_Number }}</td>
                                                <td>{{ number_format($student->Current_Balance, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
