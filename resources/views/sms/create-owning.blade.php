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
                    <h5 class="mb-0">Send School Fees Messages</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('sms.sendOwningForm') }}" method="post">
                        @csrf
                        <!-- Form -->
                        <div class="row mb-4">
                            <div class="col-sm-3 mb-2 mb-sm-0">
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
                            <div class="col-sm-3 mb-2 mb-sm-0">
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
                            <div class="col-sm-3 mb-2 mb-sm-0">
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

                            <div class="col-sm-3 mb-2 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="current_balance" class="form-label">Current Balance </label>
                                    <input type="number"
                                        class="form-control @error('current_balance') is-invalid @enderror"
                                        name="current_balance" value="{{ old('current_balance') }}" id="current_balance"
                                        placeholder="Current Balance">
                                    @error('current_balance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-4 mb-sm-0">
                                <div class="tom-select-custom">
                                    <label for="date" class="form-label">Message </label>

                                    <textarea type="text" class="form-control @error('message') is-invalid @enderror" name="message"
                                        placeholder="Message" rows="6">{{ old('message') }}</textarea>

                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-info mt-4">Send School Fees Messges</button>
                            </div>
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


            </div>
        </div>
    </div>
@endsection
