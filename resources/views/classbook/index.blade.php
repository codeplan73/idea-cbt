@extends('layouts.app_student')

@section('content')
    <div class="container">
        <div class="content">
            <div class="row g-3">
                <div class="col-mg-12 col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header position-relative">
                            <h3 class="mb-0 mt-1">Books For {{ Auth::guard('student')->user()->Student_Class }}</h3>
                            <div class="bg-holder d-none d-md-block bg-card"
                                style="
                      background-image: url({{ asset('assets/img/illustrations/corner-6.png') }});
                    ">
                            </div>
                            <!--/.bg-holder-->
                        </div>
                    </div>
                    <div class="row mb-3 g-3">
                        @unless ($books->isEmpty())
                            @foreach ($books as $book)
                                <article class="col-md-3">
                                    <div class="card h-100 overflow-hidden">
                                        <div class="card-body p-0 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="hoverbox text-center">
                                                    <a class="text-decoration-none" href="/classbook/{{ $book->id }}/show"
                                                        data-gallery="attachment-bg">
                                                        <img class="w-100 h-100 object-fit-cover"
                                                            src="assets/img/notes/book.png" alt="" />
                                                    </a>
                                                </div>
                                                <div class="p-1">
                                                    <h2 class="fs-0 fw-bold mb-1">

                                                        {{ $book->subject }}
                                                    </h2>
                                                    <h5 class="fs-0">
                                                        Term: {{ $book->term }}
                                                    </h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @else
                            <h4>No Note Yet</h4>
                        @endunless
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
