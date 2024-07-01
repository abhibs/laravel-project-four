<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Abhiram B S - {{ $project->name }}</title>
    <meta name="description" content="Abhiram B S Javalli Tudoor Thirthahalli Shivamoga 577226">
    <meta name="keywords" content="Laravel Backend Developer, Frentend Developer, REST API Developer">
    <meta property="og:title" content="Abhiram B S - {{ $project->name }}" />
    <meta property="og:description" content="Abhiram B S Javalli Tudoor Thirthahalli Shivamoga 577226" />
    <meta property="og:image" content="{{ asset('public/'.$project->image) }}" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <link href="{{ asset('public/'.$project->image) }}" rel="icon">
    <link href="{{ asset('public/'.$project->image) }}" rel="apple-touch-icon">



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

    <main id="main">

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8">
                        <h2 class="portfolio-title">Project Detail</h2>

                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <img class="img-fluid" src="{{ asset('public/'.$project->image) }}" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h1>Project information</h1>
                        <br>
                        <br>
                        <ul>
                            <li>
                                <h3><strong>Name</strong>: {{ $project->name }} </h3>
                            </li>
                            <li>
                                <h3><strong>Github</strong>: <a href="#">{{ $project->github }}</a></h3>
                            </li>
                            <li>
                                <h3><strong>Youtube</strong>: <a href="#">{{ $project->youtube }}</a></h3>
                            </li>

                            <li>
                                <h3><strong>Technlogy Used</strong>:
                                    @foreach ($tags_all as $item)
                                        <button class="btn btn-sm text-white m-2" style="background: #18d26e">
                                            {{ $item }}
                                        </button>
                                    @endforeach

                                </h3>
                            </li>
                        </ul>



                        <div class="addthis_inline_share_toolbox"></div>
                        <div><h3><strong>Share On:</strong></h3>
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style mt-2 pb-2">
                                <a class="a2a_button_whatsapp"
                                    href="whatsapp://send?text={{ urlencode('Project Detail: ' . $project->name) }}%0A{{ urlencode(route('project-detail', [$project->id, $project->slug])) }}"></a>

                                <a class="a2a_dd"></a>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('user-index') }}" class="btn text-white" style="background: #18d26e;margin-bottom: 40px;">Back To Home</a>
                        </div>


                    </div>

                </div>

            </div>
        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="http://theabhirambsjavalliproject.online/">Abhiram B S</a>
    </div>


    <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=example"></script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>


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
