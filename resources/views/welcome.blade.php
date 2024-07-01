<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Abhiram B S - Home Page</title>
    <meta content="Abhiram B S Javalli Tudoor Thirthahalli Shivamoga 577226" name="description">
    <meta content="Laravel Backend Developer, Frentend Developer, REST API Developer" name="keywords">

    <meta property="og:title" content="Abhiram B S - Home Page" />
    <meta property="og:description" content="Abhiram B S Javalli Tudoor Thirthahalli Shivamoga 577226" />
    <meta property="og:image" content="{{ asset('public/user/assets/img/abhi-favicon.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <!-- Favicons -->
    <link href="{{ asset('public/user/assets/img/abhi-favicon.png') }}" rel="icon">
    <link href="{{ asset('public/user/assets/img/abhi-favicon.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->

    <link href="{{ asset('public/user/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <h1><a href="{{ route('user-index') }}">{{ $namedata->name }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm <span>{{ $designationdata->name }} </span></h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    <li><a class="nav-link" href="#services">Certificate</a></li>
                    <li><a class="nav-link" href="#portfolio">Project</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                @foreach ($socialmediadatas as $item)
                    <a href="{{ $item->url }}" target="_blank"><i class="{{ $item->icon }}"></i></a>
                @endforeach
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('public/'.$aboutdata->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Laravel Backend Developer</h3>

                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                    <span>{{ Carbon\Carbon::parse($aboutdata->dob)->format('d F Y') }}
                                    </span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span><a href="mailto: {{ $aboutdata->email }}">{{ $aboutdata->email }}</a></span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a
                                            href="tel: {{ $aboutdata->phone }}">{{ $aboutdata->phone }}</a></span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                    <span>{{ $aboutdata->city }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                    <span>{{ $aboutdata->age }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                    <span>{{ $aboutdata->degree }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Hobbies:</strong>
                                    <span>{{ $aboutdata->hobbies }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Languages Know:</strong>
                                    <span>{{ $aboutdata->languages_know }}</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $factdata->happyclient }}"
                            data-purecounter-duration="10" class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $factdata->project }}"
                            data-purecounter-duration="10" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $factdata->company }}"
                            data-purecounter-duration="10" class="purecounter"></span>
                        <p>Company</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $factdata->certificate }}"
                            data-purecounter-duration="10" class="purecounter"></span>
                        <p>Certificates</p>
                    </div>
                </div>

            </div>

        </div><!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-6 offset-3">
                    @foreach ($skilldatas as $item)
                        <div class="progress">
                            <span class="skill">{{ $item->name }} <i
                                    class="val">{{ $item->number }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->number }}"
                                    aria-valuemin="0" aria-valuemax="{{ $item->number }}"></div>
                            </div>
                        </div>
                    @endforeach




                </div>



            </div>

        </div><!-- End Skills -->



        <!-- ======= Testimonials ======= -->
        <div class="testimonials container">

            <div class="section-title">
                <h2>Reviews</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($reviewdatas as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $item->content }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('public/'.$item->image) }}" class="testimonial-img" alt="">
                                <h3>{{ $item->company }}</h3>
                                <h4>{{ $item->ceo }}</h4>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach




                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="owl-carousel testimonials-carousel">

            </div>

        </div><!-- End Testimonials  -->

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">


                    <h3 class="resume-title">Education</h3>
                    @foreach ($educationdatas as $item)
                        <div class="resume-item">
                            <h4>{{ $item->name }}</h4>
                            <h5>{{ $item->year }}</h5>
                            <br>
                            <h5>{{ $item->percentage }} % </h5>
                            <p><em>{{ $item->collage }}</em></p>
                            <p>{{ $item->content }}</p>
                        </div>
                    @endforeach



                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($experiencedatas as $item)
                        <div class="resume-item">
                            <h4>{{ $item->name }}</h4>
                            <h5>{{ $item->year }}</h5>
                            <p><em> {{ $item->location }} </em></p>
                            {!! $item->content !!}
                        </div>
                    @endforeach



                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Certificate</h2>
                <p>My Certificate</p>
            </div>

            <div class="row">
                @foreach ($certificatedatas as $item)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset('public/'.$item->image) }}" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-center">{{ $item->name }}</h3>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Project</h2>
                <p>My Project</p>
            </div>



            <div class="row portfolio-container">
                @foreach ($projectdatas as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('public/'.$item->image) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $item->name }}</h4>
                                <div class="portfolio-links">
                                    <a href="{{ asset('public/'.$item->image) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{ $item->name }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ route('project-detail', [$item->id, $item->slug]) }}"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>{{ $aboutdata->city }}</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            @foreach ($socialmediadatas as $item)
                                <a href="{{ $item->url }}" target="_blank"><i
                                        class="{{ $item->icon }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p><a href="mailto: {{ $aboutdata->email }}">{{ $aboutdata->email }}</a></p>

                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p><a href="tel: {{ $aboutdata->phone }}">{{ $aboutdata->phone }}</a></p>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact-post') }}" method="post" class="mt-4">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>

                <div class="text-center"><button class="btn btn-lg text-white m-2" style="background: #18d26e;"
                        type="submit">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Contact Section -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="https://theabhirambsjavalliproject.online/">Abhiram B S</a>
    </div>

    <!-- Vendor JS Files -->


    <script src="{{ asset('public/user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('public/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('public/user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/user/assets/js/main.js') }}"></script>

</body>

</html>
