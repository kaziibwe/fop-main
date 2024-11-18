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
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center">
                <h1 class="sitename">Fountain of Peace International</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="about">Who we are</a></li>
                    <li><a href="#">What we do</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <!-- Main Content -->
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="assets/img/giving_hope.jpg" alt="">
                    <div class="carousel-container text-center" style=" margin-top: 15rem;">
                        <h2 style="font-size: 3rem !important;">Giving Hope</h2>
                        <p style="font-size: 16px;">We’re dedicated to giving abandoned and destitute children a chance
                            to survive, thrive and be all they can be.</p>

                        <!-- Buttons Row -->
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-cta">
                                <button id="donateButton" class="btn m-4 mt-4 text-white"
                                    style="background-color: #0a4e77; border-radius: 36px; border: none;"
                                    data-bs-toggle="modal" data-bs-target="#countryModal">
                                    Donate
                                </button>
                            </a>
                            <a href="#" class="btn-cta">
                                <button id="sponsorButton" class="btn m-4 mt-4"
                                    style="background-color: white; border-radius: 36px; border: none; color: #0a4e77;"
                                    data-bs-toggle="modal" data-bs-target="#countryModal">
                                    Sponsor
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <!-- [Add other carousel items if needed] -->
                <div class="carousel-item">
                    <img src="assets/img/buidling_families.jpg" alt="">
                    <div class="carousel-container text-center" style=" margin-top: 15rem;">
                        <h2 style="font-size: 3rem !important">Building families</h2>
                        <p style="font-size: 16px;">Our greatest joy is creating a loving, godly family around our
                            children and witnessing their
                            transformation into exceptional young leaders.</p>


                        <!-- Buttons Row -->
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-cta">
                                <button id="donateButton" class="btn m-4 mt-4 text-white"
                                    style="background-color: #0a4e77; border-radius: 36px; border: none;"
                                    data-bs-toggle="modal" data-bs-target="#countryModal">
                                    Donate
                                </button>
                            </a>
                            <a href="#" class="btn-cta">
                                <button id="sponsorButton" class="btn m-4 mt-4"
                                    style="background-color: white; border-radius: 36px; border: none; color: #0a4e77;"
                                    data-bs-toggle="modal" data-bs-target="#countryModal">
                                    Sponsor
                                </button>
                            </a>
                        </div>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="assets/img/naturing_leaders.jpg" alt="">
                    <div class="carousel-container text-center" style=" margin-top: 15rem;">
                        <h2 style="font-size: 3rem !important">Nurturing Leaders</h2>
                        <p style="font-size: 16px;">Our strategy is to discover and develop every child’s gift and
                            talent as early as possible
                            and provide
                            suitable facilities and human resource to nurture them into future leaders in their
                            respective areas of
                            giftedness.</p>


                         <!-- Buttons Row -->
                         <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-cta">
                                <button id="donateButton" class="btn m-4 mt-4 text-white"
                                    style="background-color: #0a4e77; border-radius: 36px; border: none;"
                                    data-bs-toggle="modal" data-bs-target="#countryModal">
                                    Donate
                                </button>
                            </a>
                            <a href="#" class="btn-cta">
                                <button id="sponsorButton" class="btn m-4 mt-4"
                                    style="background-color: white; border-radius: 36px; border: none; color: #0a4e77;"
                                    data-bs-toggle="modal" data-bs-target="#countryModal">
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

        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <!-- [Your existing about sections] -->
        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">

                        <img src="assets/img/donate.jpg" class="img-fluid" alt="">
                        <a href="https://youtu.be/T3NvpJaLRpM?si=U3gTz9SS7wiN9pYU"
                            class="glightbox pulsating-play-btn" style="background: #0a4e77 !important;">
                            <span class="play" style="background: #0a4e77 !important;"><i
                                    class="bi bi-play-fill"></i></span>
                        </a>
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" >
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

                        <p class="mt-4"><a href="https://sponsorship.fopinternational.org/donate" class="btn-cta "
                                style="background-color: #0a4e77;">Donate</a></p>
                    </div>
                </div>
            </div>
        </section><!-- /About 3 Section -->


    <!-- About Section -->
    <section id="about" class="about section " >

        <div class="content" >
            <div class="container" >
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="{{ asset('assets/img/community.jpg') }}" alt="Image"
                            class="img-fluid img-overlap " data-aos="zoom-out" >
  
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" >
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
                        <img src="{{ asset('assets/img/community.jpg') }}" alt="Image" class="img-fluid h-100 w-100"
                            style="object-fit: cover;">
                    </div>
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" >
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
                        <p class="mt-4"><a href="https://sponsorship.fopinternational.org/" class="btn-cta"
                                style="background-color: #0a4e77;">Sponsor</a></p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Services 2 Section -->
        <section id="services-2" class="services-2 section dark-background" style="background-color: #0a4e77">
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
      "delay": 1
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
                                        style="height: 25rem; width: 25rem;" alt="">
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="https://sponsorship.fopinternational.org/donate">
                                            <span class="service-item-category">Donate</span>
                                            <h2 class="service-item-title">Towards our community projects</h2>
                                        </a>
                                    </div>
                                    {{-- <img src="assets/img/img_sq_4.jpg" alt="Image" class="img-fluid"> --}}
                                    <img src="{{ asset('assets/img/donate.jpg') }}" class="img-fluid"
                                        alt="" style="height: 25rem;">
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
                                    <img src="{{ asset('assets/img/build.jpg') }}" class="img-fluid" alt=""
                                    style="height: 25rem;">
                                </div>
                            </div>


                        </div>
                        {{-- <div class="swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
        </section><!-- /Services 2 Section -->



        <section style="margin: -7rem 3rem;">
            <div class="carousel-container text-justify m-4">
                <h2 style="font-size: 2.5rem !important " class="text-center">Statement of Faith</h2>

                <ol>
                    <h2 class="post-title">One Eternal God </h2>
                        <ol class="content">
                            <li>We believe in one eternal God who is the creator of all things.</li>
                            <li>He exists in three persons: God the Father, God the Son, and God the Holy Spirit.</li>
                            <li>He is totally loving and completely holy.</li>
                        </ol>
                    
                        <h2 class="post-title">The Bible </h2>
                        <ol>
                            <li>We believe that the Bible is the inspired Word of God.</li>
                            <li>It is accurate, authoritative, and applicable to our everyday lives.</li>
                        </ol>
                   
                        <h2 class="post-title">The Nature of Sin </h2>
                        <ol>
                            <li>We believe that sin has separated each of us from God and His purpose for our lives.</li>
                        </ol>
                   
                        <h2 class="post-title">Jesus Christ </h2>
                        <ol>
                            <li>We believe that the Lord Jesus Christ, as both God and man, is the only one who can reconcile us to God.</li>
                            <li>He lived a sinless and exemplary life, died on the cross in our place, and rose again to prove His victory and empower us for life.</li>
                        </ol>
                        <h2 class="post-title">The Work of the Holy Spirit </h2>
                        <ol>
                            <li>We believe in the necessity of the work of the Holy Spirit to make the death of Christ effective to the individual sinner.</li>
                            <li>The Holy Spirit grants repentance toward God and faith in Jesus Christ.</li>
                        </ol>
                   
                        <h2 class="post-title">The Church </h2>
                        <ol>
                            <li>We believe in the one Holy universal Church, which is the Body of Christ.</li>
                            <li>All true believers belong to this Church and are united through the Holy Spirit.</li>
                        </ol>
                        <h2 class="post-title">The Second Coming of Christ</h2>
                        <ol>
                            <li>We believe that the Lord Jesus Christ is coming back as He promised.</li>
                        </ol>
                  
                </ol>
                
               

                <p style="font-size: 14px;"> <a
                        href="https://www.fountainofpeace.net/docs/Statement-of-Faith.pdf">Read our statement of faith
                        here</a>
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
                        <div class="post-item position-relative h-100" data-aos="fade-up" >

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
                        <div class="post-item position-relative h-100" data-aos="fade-up" >

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

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" >
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

        <!-- Modal Structure -->
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
                        <form id="countryForm">
                            <div class="mb-3">
                                <label for="countrySelect" class="form-label">Country</label>
                                <select id="countrySelect" class="form-control" style="width: 100%;">
                                    <option value="" data-flag="ug">Choose Country</option>
                                    <option value="ug" data-flag="ug">Uganda</option>
                                    <option value="gb" data-flag="gb">United Kingdom</option>
                                    <option value="nz" data-flag="nz">New Zealand</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- [Rest of your main content, such as sections for events, recent posts, etc.] -->

    </main>

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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"
        style="background: #0a4e77;"><i class="bi bi-arrow-up-short"></i></a>

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

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Initialize Select2 on the select element
            $('#countrySelect').select2({
                templateResult: formatCountry,
                templateSelection: formatCountry,
                dropdownParent: $('#countryModal'),
                minimumResultsForSearch: Infinity // hides the search box
            });

            function formatCountry(state) {
                if (!state.id) {
                    return state.text;
                }
                if (state.id === 'other') {
                    return $('<span>' + state.text + '</span>');
                } else {
                    var flag = $(state.element).data('flag');
                    if (flag) {
                        var flagUrl = "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/flags/4x3/" +
                            flag + ".svg";
                        var $state = $(
                            '<span><img src="' + flagUrl +
                            '" class="img-flag" style="width: 20px; height: auto;"/> ' + state.text +
                            '</span>'
                        );
                        return $state;
                    } else {
                        return state.text;
                    }
                }
            }

            // 'change' event handler
            $('#countrySelect').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue === 'other') {
                    // Implement additional logic for 'Other' selection
                    // alert('Please specify your country.');
                    window.location.href = 'https://sponsorship.fopinternational.org/';
                } else {
                    // Navigate to the specified URL
                    window.location.href = 'https://sponsorship.fopinternational.org/';
                }
                // Disable the dropdown after selection
                $('#countrySelect').prop('disabled', true);
            });

            // Disable 'Donate' and 'Sponsor' buttons after first click
            $('#donateButton, #sponsorButton').one('click', function() {
                $(this).prop('disabled', true);
            });
        });
    </script>

</body>

</html>
