@extends('layouts.guest')

@section('content')
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Message!',
                    text: '{{ session('success') }}'
                });
            });
        </script>
    @endif

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row" style="">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">We provide advanced solutions for enhancing your knowledge</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We are a skilled team of developers creating user-friendly
                        platforms for Computer Based Test (CBT)</h2>

                </div>
                <div style="padding: 12px 10px;" class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/studimg.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <section class="anns">
        <marquee behavior="scroll" direction="left">
            {{ $latestTerm->announcement }}
        </marquee>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="padding: 20px 0px;">

        <div class="container" data-aos="fade-up">
            <div class="row gx-4 gy-4">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>OUR INSTITUTIONS:</h2>

                        <h2 data-aos="fade-up">* Hira Comprehensive College, Kogi.</h2>
                        <h2 data-aos="fade-up">* Hira Comprehensive College, Iyakpi.</h2>
                        <h2 data-aos="fade-up">* Hira Comprehensive College, Ogbido.</h2>
                        <h2 data-aos="fade-up">* Futac International Schools, Okpella.</h2>
                        <h2 data-aos="fade-up">* El-Amin College of M. Sciences, Aviele.</h2>

                        <hr>
                        <div class="text-center text-lg-start">
                            <a href="#"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                {{-- <span>Read More</span> --}}
                                <span>Who We Are</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/College2.jpeg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/Class1.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/sport3.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/stud5.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/stud7.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section>
    <!-- End About Section -->

    <!-- ======= News Letter Section ======= -->
    <section id="newsletter" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-4">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up text-center my-2 fw-bold"
                        style="color: darkblue; text-align: center; margin-bottom: 2rem;">
                        {{ $generalInfo->title }}</h1>
                </div>

                <div class="col-lg-12 d-flex align-items-center" data-aos-delay="200">
                    <iframe id="pdfViewer" src="{{ url('storage/' . $generalInfo->homepage_pdf) }}"
                        style="width: 100%; height: 500px;" frameborder="0"></iframe>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Letter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                {{-- <h2>Contact</h2> --}}
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Hira Comprehensive College, <br /> Iyakpi, South Ibie, Edo State</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+234-803 6398 734<br>+234-813 1231 252</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>aamin.hira@gmail.com<br>hiracollege2007@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>07:30 AM - 03:30 PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{ route('contact') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

    <style>
        .anns {
            margin-top: -130px;
            background: rgb(77, 187, 77) !important;
            color: #fff;
            font-size: 24px;
            font-weight: 800;
            padding: 10px 80px;

        }

        @media screen and (max-width:760px) {
            .anns {
                margin-top: -40px;
                background: rgb(77, 187, 77) !important;
                color: #fff;
                font-size: 18px;
                font-weight: 800;
                padding: 10px 20px;
            }
        }
    </style>
    <!-- End Contact Section -->
@endsection
