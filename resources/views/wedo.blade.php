<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Fountain of Peace International</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <!--<link rel="icon" href="{{ asset('assets/img/favicon.png') }}">-->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Country Select CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.0.1/css/countrySelect.min.css">

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        @media (min-width: 768px) {
            .img-lg-md-height {
                height: 500px;
                /* Adjust the height as needed */
                object-fit: cover;
            }
        }

        @media (min-width: 992px) {
            .img-lg-md-height {
                height: 600px;
                /* Adjust the height as needed */
                object-fit: cover;
            }
        }

        .btn-cta button {

            padding: 16px !important;
            font-size: 16px;
            font-weight: bold;


        }

        .btn-cta button:hover {
            background-color: #0056b3;
            /* Dark blue on hover */
            color: #ffffff;
        }

        /* Custom styles for the country dropdown */
        .country-select.inside .country-list {
            max-height: 200px;
            overflow-y: auto;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            display: flex;
            align-items: center;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered img {
            margin-right: 8px;
        }


        .select2-container {
            width: 100% !important;
        }
    </style>

</head>

<body class="index-page">

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        
        <!-- Logo at the start -->
        <a href="#" class="d-flex align-items-center" style="margin-left: -100px;">
            <img 
                src="logo.png" 
                alt="Logo" 
                class="img-fluid"
                style="max-height: 70px;">
        </a>

        <!-- Navigation Menu -->
        <nav id="navmenu" class="navmenu d-flex align-items-center">
            <ul class="d-flex mb-0">
                <li><a href="/" class="active">Home</a></li>
                <li><a href="https://fopinternational.org/about">Who we are</a></li>
                <li><a href="https://fopinternational.org/wedo">What we do</a></li>
                {{-- <li><a href="#">Contact</a></li> --}}
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        
    </div>
</header>


    <!-- Main Content -->
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url('assets/img/naturing_leaders.jpg');">
            <div class="container position-relative">
                <h1> WHAT WE DO</h1>
                <p>At Fountain of Peace, we believe that every child is uniquely created,
                    deeply valued, and deserving of unconditional love and suppor.</p>

            </div>
        </div><!-- End Page Title -->

        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <img src="{{ asset('assets/img/sponsor.jpg') }}"alt="Image" class="img-fluid">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span> --}}
                        </a>
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <p class="content-title mb-4">
                            We provide orphaned and abandoned children with a loving Christian home where they receive
                            all the love, care, protection and practical support they need to thrive.

                            Most children come to us at, or soon after, birth and we we are committed to caring for them
                            until old enough to be independent. We are one of few registered children’s homes in the
                            region, and therefore our services are in great demand.

                            We care for all our children as if they were our own, giving them all the love and support
                            they need along the way.

                            </p>

                            <p class="mb-4">
                                Fountain of Peace Village
                                We are based in the Kyenjojo District of Western Uganda.

                                The Kyenjojo region is stunningly beautiful, but also marred by extreme poverty.
                                Unemployment, maternal mortality and malnutrition are all too common in the region where
                                many children are left orphaned or abandoned. As a result of the extensive poverty,
                                school attendance is well below the national average and access to healthcare and job
                                opportunities is difficult.

                            </p>


                            {{-- <p><a href="#" class="btn-cta">Get in touch</a></p> --}}
                    </div>
                </div>
            </div>
        </section><!-- /About 3 Section -->



        <!-- Footer -->
        <footer id="footer" class="footer" style="background-color: #0a4e77;">
            <div class="copyright text-center">
                <div
                    class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                    <div class="d-flex flex-column align-items-center align-items-lg-start text-white">
                        <div>
                            © Copyright <strong><span>Fountain of Peace</span></strong>. All Rights Reserved
                        </div>
                    </div>

                </div>
            </div>
        </footer>


        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- jQuery (required for Bootstrap JS and Select2) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS Bundle -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Country Select JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.0.1/js/countrySelect.min.js"></script>

        <!-- Select2 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>
