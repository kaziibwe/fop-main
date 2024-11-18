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
                <li><a href="about">Who we are</a></li>
                <li><a href="wedo">What we do</a></li>
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
                <h1> WHO WE ARE</h1>
                <p>At Fountain of Peace, we believe that every child is uniquely created,
                    deeply valued, and deserving of unconditional love and suppor.</p>

            </div>
        </div><!-- End Page Title -->

        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <img src="{{ asset('assets/img/child.png') }}"alt="Image" class="img-fluid">
                        <img src="{{ asset('assets/img/sponsor.jpg') }}"alt="Image" class="img-fluid">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
              <span class="play"><i class="bi bi-play-fill"></i></span> --}}
                        </a>
                    </div>


                    <div class="col-lg-5 order-lg-1 fs-6" data-aos="fade-up" data-aos-delay="100">
                    <p class=" mb-4">Peace is the founder and inspiration behind the work of Fountain
                            of Peace Children's Foundation. Married to Patrick Ruharuza and now a mother of three
                            children, she studied at Makarere University Business School, Kampala in Uganda, and
                            Plymouth University in the UK. She has worked with Compassion in both Uganda and the UK, and
                            was a formerly sponsored child through the same organisation. She now lives with her family
                            in Uganda.

                            When she was just eight years old, Peace would look longingly at the children in her village
                            as they walked to school every day. She wanted more than anything to join them but, having
                            been born into a struggling family of 14 children, education was one of many unaffordable
                            luxuries.

                            She spent much of her childhood being passed between family members during which time she
                            experienced neglect and abuse. She slept next to the family goat in a small outhouse, ate
                            leftover food and dodged daily beatings from those who were supposed to protect her.

                            There appeared to be no way out for her and she became hardened to fending for herself,
                            until thrown an unexpected lifeline. Her plight had not gone unnoticed by God and Peace was
                            registered into a Compassion child sponsorship programme attached to the local Baptist
                            church. Here she not only received an education, but also the opportunity to rise above her
                            circumstances and believe in herself, and a God who loved her dearly.

                            </p>

                            <p class="mb-4"> From that moment, Peace promised God that, if she were able to escape
                                from poverty, she would dedicate her life to caring for the poorest of the poor. Having
                                completed a bachelor’s degree, she gave up the comfort of her life in the UK and
                                travelled back to Uganda to fulfil her promise.

                                Today, the Fountain of Peace Children’s Foundation is a beacon of hope for children
                                across the region of Kyenjojo in Western Uganda – a region that remains ravaged by the
                                poverty that Peace experienced as a little girl.
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
