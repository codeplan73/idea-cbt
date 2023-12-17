@extends('layouts.app')

@if (session('message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'info',
                title: 'No Result!',
                text: '{{ session('message') }}'
            });
        });
    </script>
@endif

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h4 class="mb-0">Search Result By Class</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('result.storeClassResult') }}" method="post">
                        @csrf

                        <div class="row gy-3">
                            <div class="col-sm-6">
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
                            <div>
                                @include('components.button', ['label' => 'Submit'])
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
