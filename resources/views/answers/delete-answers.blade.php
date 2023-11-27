@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row g-0">
            <div class="col-lg-10 pe-lg-2">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Delete All Answers Record</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="row g-3" id="deleteForm" method="POST" action="{{ route('delete.deleteAll') }}">
                            @csrf

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
            var confirmation = window.confirm("Are you sure you want to delete all answers from the answers table?");

            // If the user confirms, submit the form
            if (confirmation) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection
