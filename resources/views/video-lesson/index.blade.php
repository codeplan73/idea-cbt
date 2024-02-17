@extends('layouts.app_student')

@section('content')
    <div class="container">
        <div class="content">
            <div class="row g-3">
                <div class="col-mg-12 col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header position-relative">
                            <h3 class="mb-0 mt-1">Video Lessons For {{ Auth::guard('student')->user()->Student_Class }}</h3>
                            <div class="bg-holder d-none d-md-block bg-card"
                                style="
                      background-image: url({{ asset('assets/img/illustrations/corner-6.png') }});
                    ">
                            </div>
                            <!--/.bg-holder-->
                        </div>
                    </div>
                    <div class="row mb-3 g-3">
                        @unless ($videos->isEmpty())
                            @foreach ($videos as $video)
                                <article class="col-md-3">
                                    <div class="card h-100 overflow-hidden">
                                        <div class="card-body p-0 d-flex flex-column justify-content-between">
                                            <div>
                                                <div class="hoverbox text-center">
                                                    <a class="text-decoration-none"
                                                        href="/video-lesson/{{ $video->id }}/show"
                                                        data-gallery="attachment-bg">
                                                        <img class="w-100 h-100 object-fit-cover"
                                                            src="assets/cover/video-cover.png" alt="" />
                                                    </a>
                                                </div>
                                                <div style="padding-left:10px; display: flex; flex-direction: column;">
                                                    <p class="fw-bold">
                                                        {{ $video->topic }}
                                                    </p>
                                                    <p>
                                                        {{ $video->subject }}
                                                    </p>
                                                    <p>
                                                        {{ $video->term }}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @else
                            <h4>No Video Yet</h4>
                        @endunless
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
