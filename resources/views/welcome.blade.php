@extends('layouts.guest')


@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">We provide advanced solutions for enhancing your knowledge</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We are a skilled team of developers creating user-friendly
                        platforms for computer-based tests</h2>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    @if ($generalInfo)
        <!-- ======= News Letter Section ======= -->
        <section id="newsletter" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-4">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up text-center my-4 fw-bold"
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
    @endif

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat
                            corrupti reprehenderit.</h2>
                        <p>
                            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                            consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam
                            et est corrupti.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/landing/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section>
    <!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
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
                                <p>hiracollege2007@gmail.com<br>aamin.hira@gmail.com</p>
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
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
    <!-- End Contact Section -->
@endsection
