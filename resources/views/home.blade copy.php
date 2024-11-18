<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Fountain of Peace International</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->

    <link rel="stylesheet" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    {{-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}">

    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    {{-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    {{-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">

    <!-- Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">



</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                {{-- <img src="assets/img/fop_logo.jpg" alt="Fountain of Peace International"> --}}
                <h1 class="sitename">Fountain of Peace International</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Who we are</a></li>
                    <li><a href="#">What we do</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>


            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="assets/img/giving_hope.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2 style="font-size: 3rem !important">Giving Hope</h2>
                        <p style="font-size: 16px;">We’re dedicated to giving abandoned and destitute children a chance
                            to survive, thrive and be
                            all
                            they can be.</p>


                        <!-- Buttons Row -->
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-cta" data-bs-toggle="modal" data-bs-target="#countryModal">
                                <button class="btn m-4 mt-4 text-white"
                                    style="background-color: #0a4e77; border-radius: 36px; border: none;">
                                    Donate
                                </button>
                            </a>
                            <a href="#" class="btn-cta" data-bs-toggle="modal" data-bs-target="#countryModal">
                                <button class="btn m-4 mt-4"
                                    style="background-color: white; border-radius: 36px; border: none; color: #0a4e77;">
                                    Sponsor
                                </button>
                            </a>
                        </div>








                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/buidling_families.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2 style="font-size: 3rem !important">Building families</h2>
                        <p style="font-size: 16px;">Our greatest joy is creating a loving, godly family around our
                            children and witnessing their
                            transformation into exceptional young leaders.</p>


                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-cta">
                                <button class="btn m-4 mt-4 text-white"
                                    style="background-color: #0a4e77; border-radius: 36px; border: none;">
                                    Donate
                                </button>
                            </a>
                            <a href="#" class="btn-cta">
                                <button class="btn m-4 mt-4 "
                                    style="background-color: white; border-radius: 36px; border: none; color: #0a4e77;">
                                    Sponsor
                                </button>
                            </a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/naturing_leaders.jpg" alt="">
                    <div class="carousel-container text-center">
                        <h2 style="font-size: 3rem !important">Nurturing Leaders</h2>
                        <p style="font-size: 16px;">Our strategy is to discover and develop every child’s gift and
                            talent as early as possible
                            and provide
                            suitable facilities and human resource to nurture them into future leaders in their
                            respective areas of
                            giftedness.</p>


                        <div class="d-flex align-items-center">
                            <a href="#" class="btn-cta">
                                <button class="btn m-4 mt-4 text-white"
                                    style="background-color: #0a4e77; border-radius: 36px; border: none;">
                                    Donate
                                </button>
                            </a>
                            <a href="#" class="btn-cta">
                                <button class="btn m-4 mt-4 "
                                    style="background-color: white; border-radius: 36px; border: none; color: #0a4e77;">
                                    Sponsor
                                </button>
                            </a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->



                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->



        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">

                        <img src="{{ asset('assets/img/donate.jpg') }}" class="img-fluid" alt="">
                        <a href="https://youtu.be/T3NvpJaLRpM?si=U3gTz9SS7wiN9pYU"
                            class="glightbox pulsating-play-btn" style="background: #0a4e77 !important;">
                            <span class="play" style="background: #0a4e77 !important;"><i
                                    class="bi bi-play-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="content-title mb-4" style="color: #0a4e77">Rescuing. Nurturing. Building Families.
                        </h2>
                        <p class="mb-4">
                            Over the years, we have been privileged to intervene at the right time to save a child’s
                            life. Some of
                            our rescue missions have often made the difference between life and death for these
                            abandoned
                            and/or orphaned children in dire need of life support.
                        </p>
                        {{-- <ul class="list-unstyled list-check"> --}}
                        <ul class="list-unstyled">
                            <li>Together
                                we are building a brighter future,full of hope and transformation. </li>
                        </ul>

                        <p class="mt-4"><a href="#" class="btn-cta "
                                style="background-color: #0a4e77;">Donate</a></p>
                    </div>
                </div>
            </div>
        </section><!-- /About 3 Section -->


        <!-- About Section -->
        <section id="about" class="about section " style="background-color: #0a4e77">

            <div class="content" style="background-color: #0a4e77">
                <div class="container" style="background-color: #0a4e77">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="assets/img/mission.jpg" alt="Image"
                                class="img-fluid img-overlap img-lg-md-height" data-aos="zoom-out">

                        </div>
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="content-subtitle text-white opacity-50">OUR MISSION</h3>
                            <h2 class="content-title mb-4">
                                Giving <strong>hope and transforming lives</strong> for Uganda's children.
                            </h2>
                            <p class="opacity-50">
                                Providing hope and a secure future, in a Christian environment, for orphaned,
                                abandoned, and other critically vulnerable children of Western Uganda.
                            </p>

                            <div class="row my-5">
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="bi bi-emoji-heart-eyes me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">Rescue</h4>
                                        <p class="text-white opacity-50">Giving each child a home and a family.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="bi bi-person-hearts me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">Nurture</h4>
                                        <p class="text-white opacity-50">Giving each child an education and a future.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-start">
                                    <i class="bi bi-person-arms-up me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white">Empower</h4>
                                        <p class="text-white opacity-50">Empowering our children and the local
                                            community.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <section id="about-3" class="about-3 section vh-90 d-flex align-items-center">
            <div class="container h-100">
                <div class="row gy-4 justify-content-between align-items-center h-100">
                    <div class="col-lg-6 order-lg-2 position-relative h-90" data-aos="zoom-out">
                        <img src="assets/img/community.jpg" alt="Image" class="img-fluid h-100 w-100"
                            style="object-fit: cover;">
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="content-title mb-4">Community Impact</h2>
                        <p class="mb-4">
                            In addition to supporting our children at Fountain of Peace village, we’ve made it our
                            mission to bring life-changing solutions to our nearby vulnerable communities.
                        </p>
                        <ul class="list-unstyled">
                            <li>We have over 400 vulnerable children receive an education at our very own Rwenjaza
                                Hillside Nursery and Primary School. We have also built over 3 wells that are providing
                                more communities with the gift of clean, life-sustaining water.
                            </li>
                        </ul>
                        <p class="mt-4"><a href="#" class="btn-cta"
                                style="background-color: #0a4e77;">Sponsor</a></p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Services 2 Section -->
        <section id="services-2" class="services-2 section " style="background-color: #0a4e77">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Partnership</h2>
                <p>How you can partner with us.</p>
            </div><!-- End Section Title -->

            <div class="services-carousel-wrap">
                <div class="container">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 40
                  }
                }
              }
            </script>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">Sponsor</span>
                                            <h2 class="service-item-title">A Child, A Baby, Family</h2>
                                        </a>
                                    </div>
                                    {{-- <img src="assets/img/img_sq_1.jpg" alt="Image" class="img-fluid"> --}}
                                    <img src="{{ asset('assets/img/sponsor.jpg') }}" class="img-fluid"
                                        style="height: 14.4rem; width: 25rem;" alt="">
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">Donate</span>
                                            <h2 class="service-item-title">Towards our community projects</h2>
                                        </a>
                                    </div>
                                    {{-- <img src="assets/img/img_sq_4.jpg" alt="Image" class="img-fluid"> --}}
                                    <img src="{{ asset('assets/img/donate.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span class="service-item-category">Build</span>
                                            <h2 class="service-item-title">A Home</h2>
                                        </a>
                                    </div>
                                    {{-- <img src="assets/img/img_sq_5.jpg" alt="Image" class="img-fluid"> --}}
                                    <img src="{{ asset('assets/img/build.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>


                        </div>
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
        </section><!-- /Services 2 Section -->



        <section style="margin: 5%;">
            <div class="carousel-container text-center m-4">
                <h2 style="font-size: 2.5rem !important">Statement of Faith</h2>
                <p style="font-size: 1rem;">At Fountain of Peace, we believe that every child is uniquely created,
                    deeply valued, and deserving of unconditional love and support.</p> 
                    
                    <p>Guided by principles of faith, we
                        commit to nurturing each child in a compassionate, safe, and joyful environment, where they feel
                        truly seen and heard.</p>


                <p style="font-size: 14px;"> <a href="https://www.fountainofpeace.net/docs/Statement-of-Faith.pdf">Read our statement of faith here</a>
                    </p>


            </div>
            {{-- </div> --}}
        </section>



        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Upcoming Events </h2>
                {{-- <p>Necessitatibus eius consequatur</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden"
                                style="background-color: #0a4e77;">
                                {{-- <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""> --}}
                                <img src="{{ asset('assets/img/uganda.jpg') }}" class="img-fluid"
                                    style="height: 19.6rem; width: 27rem;" alt="">
                                <span class="post-date" style="background-color: #0a4e77 !important;">December
                                    12</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h1 class="post-title">Uganda trip</h1>

                                <p class="">Join us as for a mission tour at our children’s village in
                                    Kyenjojo. We have over 400
                                    vulnerable children receive an education at our very own Rwenjaza Hillside Nursery
                                    and Primary
                                    School.</p>

                                <p class="">We have also built over 3 wells that are providing more
                                    communities with the gift of clean, lifesustaining water.</p>



                                <hr>

                                <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                            <div class="post-img position-relative overflow-hidden">
                                {{-- <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""> --}}
                                <img src="{{ asset('assets/img/christmas.jpg') }}" class="img-fluid" alt="">
                                <span class="post-date" style="background-color: #0a4e77 !important;">July 17</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h1 class="post-title">Christmas Carols</h1>

                                <p class="">Join us as for a mission tour at our children’s village in
                                    Kyenjojo. We have over 400
                                    vulnerable children receive an education at our very own Rwenjaza Hillside Nursery
                                    and Primary
                                    School.</p>

                                <p class="">We have also built over 3 wells that are providing more
                                    communities with the gift of clean, lifesustaining water.</p>



                                <hr>

                                <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                {{-- <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""> --}}
                                <img src="{{ asset('assets/img/lean.jpg') }}" class="img-fluid"
                                    style="height: 19.6rem; width: 27rem;" alt="">
                                <span class="post-date" style="background-color: #0a4e77 !important;">September
                                    05</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h1 class="post-title">Lean on me Concert</h1>

                                <p class="">Join us as for a mission tour at our children’s village in
                                    Kyenjojo. We have over 400
                                    vulnerable children receive an education at our very own Rwenjaza Hillside Nursery
                                    and Primary
                                    School.</p>

                                <p class="">We have also built over 3 wells that are providing more
                                    communities with the gift of clean, lifesustaining water.</p>



                                <hr>

                                <a href="#" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>

            </div>

        </section><!-- /Recent Posts Section -->



    </main>
    
    
    
    
                        <!-- Modal Structure -->
                        <div class="modal fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="countryModalLabel">Select Your Country</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="countrySelect" class="form-label">Country</label>
                                                <select id="countrySelect" class="form-control"
                                                    style="width: 100%;"></select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

    <footer id="footer" class="footer " style="background-color: #0a4e77;">



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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"
        style="background: #0a4e77;"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    {{-- <script src="assets/vendor/aos/aos.js"></script> --}}
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    {{-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> --}}
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    {{-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> --}}
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Main JS File -->
    {{-- <script src="assets/js/main.js"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- jQuery and Select2 scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Bootstrap JS Bundle -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>



    <script>
        const countries = ["Uganda", "UK", "New Zealand", "Other"/* Add all other countries here */
        ];
        const selectElement = document.getElementById("countrySelect");

        countries.forEach(country => {
            const option = document.createElement("option");
            option.value = country;
            option.textContent = country;
            selectElement.appendChild(option);
        });



        $(document).ready(function() {
            $('#countrySelect').select2({
                dropdownParent: $('#countryModal')
            });
        });
    </script>


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
            
        }

        .btn-cta button:hover {
            background-color: #0056b3;
            /* Dark blue on hover */
            color: #ffffff;
        }
    </style>

</body>

</html>