<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Puri Nusa Kembangan </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/main-icon.ico')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/main-icon.ico')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/main-icon.ico')}}" />
    <link rel="manifest" href="{{asset('assets/images/main-icon.ico')}}" />
    <meta name="description" content="Puri Nusa Kembangan" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{url('/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/aports-icons/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendors/timepicker/timePicker.css')}}" />

    <style>
        .floating {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 100px;
            right: 40px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .fab-icon {
            margin-top: 10px;
        }
    </style>

    <!-- template styles -->
    <link rel="stylesheet" href="{{url('/assets/css/aports.css')}}" />
    <link rel="stylesheet" href="{{url('/assets/css/aports-responsive.css')}}" />
    {!!$general['content']->tiktok_pixel_script!!}
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <!-- <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <!-- <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>30 Commercial Road Fratton, Australia</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                    <div class="main-header__top-right">
                        <!-- <div class="main-header__top-time">
                            <p>Mon - Sat: 8.00 am - 7.00 pm</p>
                        </div>
                        <div class="main-header__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="/"><img src="{{asset('assets/images/main-icon.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown current">
                                    <a href="/">Home </a>
                                    <ul class="shadow-box">
                                        <li><a href="/">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                        <li><a href="index3.html">Home Three</a></li>
                                        <li class="dropdown">
                                            <a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="/">Header One</a></li>
                                                <li><a href="index2.html">Header Two</a></li>
                                                <li><a href="index3.html">Header Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="shadow-box">
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Services</a>
                                        </li>
                                        <li><a href="the-building.html">The Building</a>
                                        </li>
                                        <li><a href="agents.html">Agents</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Appartments</a>
                                    <ul class="shadow-box">
                                        <li><a href="apartments.html">Apartments</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Apartment Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">News</a>
                                    <ul class="shadow-box">
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">News Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="main-menu__right">
                            <div class="main-menu__search-btn-box">
                                <!-- <div class="main-menu__search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div> -->
                                <div class="main-menu__btn-box">
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="thm-btn main-menu__btn" target="_blank">JADWALKAN VISIT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options=''>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/banner-1.png')}}');"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Your Next Level of Home <br> <br> <br></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/gallery/banner-1.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Modern <br> Residential <br> Apartments</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/gallery/banner-1.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Modern <br> Residential <br> Apartments</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->




                </div>



                <!-- If we need navigation buttons -->
                <!-- <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div> -->

            </div>
        </section>
        <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__big-text">Purinusa</div>
                            <div class="about-one__img-box">
                                <div class="about-one__img-one">
                                    <img src="{{ asset('assets/images/house-concept-1.png') }}" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="{{ asset('assets/images/house-concept-2.png') }}" alt="">
                                </div>
                                <div class="about-one__shape-1 float-bob-y"></div>
                                <div class="about-one__shape-2">
                                    <img src="{{asset('assets/images/about-one-shape-2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">KONSEP PERUMAHAN</span>
                                <h2 class="section-title__title">Perumahan <br> Modern & Premium</h2>
                            </div>
                            <p class="about-one__text">Perumahan dengan luas 6000 m2 dan memiliki 49 unit di Kembangan, Jakarta Barat.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Design Modern & Minimalis</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Lokasi Strategis</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Lokasi Strategis</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="thm-btn about-one__btn">PELAJARI LEBIH LANJUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__inner">
                            <ul class="list-unstyled counter-one__list">
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-size"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="3" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Lantai</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-parking"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="1" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Carport</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-apartments"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="4" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Kamar Tidur</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-hotel-bed"></span>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="4" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Kamar Mandi</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="feature-one__bg-box">
                <div class="feature-one__bg"></div>
            </div>
            <div class="feature-one__shape-1 float-bob-x">
                <img src="{{asset('assets/images/feature-one-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="feature-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Keunggulan Utama</span>
                                <h2 class="section-title__title">Fitur Utama <br> Purinusa Kembangan </h2>
                            </div>
                            <!-- <p class="feature-one__text">Man braid hell of edison bulb four brunch subway <br> tile
                                authentic, chillwave put a bird on it church-key <br> try-hard ramps heirloom.</p> -->
                            <div class="feature-one__video-link">
                                <a href="https://www.youtube.com/watch?v=_dozIuxnfX4" class="video-popup">
                                    <div class="feature-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="feature-one__counter-box">
                                <ul class="feature-one__counter-list list-unstyled">
                                    <li>
                                        <div class="feature-one__counter-content-box">
                                            <div class="feature-one__counter-count-box count-box">
                                                <h3 id="count-text-black" class="count-text" data-stop="49" data-speed="1500">00</h3>
                                                <span class="feature-one__counter-plus">+</span>
                                            </div>
                                            <p class="feature-one__counter-text">Unit</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-one__counter-content-box">
                                            <div class="feature-one__counter-count-box count-box">
                                                <h3 id="count-text-black" class="count-text" data-stop="6000" data-speed="1500">00</h3>
                                                <span class="feature-one__counter-plus">+</span>
                                            </div>
                                            <p class="feature-one__counter-text">m2</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="feature-one__right">
                            <div class="row">
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <div class="feature-one__icon">
                                                <span class="icon-residential"></span>
                                            </div>
                                            <h3 class="feature-one__title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Smart living</a></h3>
                                            <p class="feature-one__text">When nothing prevents our being
                                                able to we like best, every pleasure to be welcomed & every.</p>
                                            <div class="feature-one__btn">
                                                <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.l"> <i class="fa fa-arrow-right"></i>Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <div class="feature-one__icon">
                                                <span class="icon-sustainable"></span>
                                            </div>
                                            <h3 class="feature-one__title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Eco construction</a>
                                            </h3>
                                            <p class="feature-one__text">When nothing prevents our being
                                                able to we like best, every pleasure to be welcomed & every.</p>
                                            <div class="feature-one__btn">
                                                <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit."> <i class="fa fa-arrow-right"></i>Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <div class="feature-one__icon">
                                                <span class="icon-world"></span>
                                            </div>
                                            <h3 class="feature-one__title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Attractive
                                                    location</a></h3>
                                            <p class="feature-one__text">When nothing prevents our being
                                                able to we like best, every pleasure to be welcomed & every.</p>
                                            <div class="feature-one__btn">
                                                <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit."> <i class="fa fa-arrow-right"></i>Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                                <!--Feature One Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="feature-one__single">
                                        <div class="feature-one__single-inner">
                                            <div class="feature-one__icon">
                                                <span class="icon-home-automation"></span>
                                            </div>
                                            <h3 class="feature-one__title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Modern technology</a>
                                            </h3>
                                            <p class="feature-one__text">When nothing prevents our being
                                                able to we like best, every pleasure to be welcomed & every.</p>
                                            <div class="feature-one__btn">
                                                <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit."> <i class="fa fa-arrow-right"></i>Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Feature One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--Floor Plan Start-->
        <section class="floor-plan">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Layout Rumah</span>
                    <h2 class="section-title__title">Layout Rumah</h2>
                    <p class="floor-plan__text">Layout yang kami rancangkan dengan se-efisien mungkin sesuai <br> kebutuhan kalian dari 2 lantai hingga juga 3 lantai.</p>
                </div>
                <div class="floor-plan__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#penthouse" class="tab-btn active-btn"><span>Tipe 2 Lantai</span></li>
                        <li data-tab="#stuido" class="tab-btn"><span>Tipe 3 Lantai</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="penthouse">
                            <div class="floor-plan__tab-content-inner">
                                <div class="floor-plan__tab-content-left">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total area</p>
                                            <span>60/110 m2</span>
                                        </li>
                                        <li>
                                            <p>Floor</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <p>Current status</p>
                                            <span>Development</span>
                                        </li>
                                        <li>
                                            <p>Bedroom</p>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <p>Bathroom</p>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <p>Carport</p>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-center">
                                    <img src="{{asset('assets/images/home-layout.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="stuido">
                            <div class="floor-plan__tab-content-inner">
                                <div class="floor-plan__tab-content-left">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total area</p>
                                            <span>60/140 m2</span>
                                        </li>
                                        <li>
                                            <p>Floor</p>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <p>Current status</p>
                                            <span>Development</span>
                                        </li>
                                        <li>
                                            <p>Bedroom</p>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <p>Bathroom</p>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <p>Carport</p>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-center">
                                    <img src="{{asset('assets/images/home-layout-2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="duplex">
                            <div class="floor-plan__tab-content-inner">
                                <div class="floor-plan__tab-content-left">
                                    <ul class="list-unstyled floor-plan__tab-content-details">
                                        <li>
                                            <p>Total area</p>
                                            <span>2800 Sq. Ft</span>
                                        </li>
                                        <li>
                                            <p>Floor no.</p>
                                            <span>2nd</span>
                                        </li>
                                        <li>
                                            <p>Current status</p>
                                            <span>Available</span>
                                        </li>
                                        <li>
                                            <p>No. of rooms</p>
                                            <span>04</span>
                                        </li>
                                        <li>
                                            <p>Parking available</p>
                                            <span>Yes</span>
                                        </li>
                                        <li>
                                            <p>Price from</p>
                                            <span>$4500</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="floor-plan__tab-content-righ">
                                    <img src="{{asset('assets/images/floor-plan-tab-content-img-1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Floor Plan End-->

        <!--Apartments One Start-->
        <section class="apartments-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">2 Pilihan Tipe Rumah</span>
                    <h2 class="section-title__title">Pilih Rumah-mu</h2>
                </div>
                <div class="row">
                    <!--Apartments One Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="apartments-one__single">
                            <div class="apartments-one__img">
                                <img src="{{asset('assets/images/house-display-1.png')}}" alt="">
                                <div class="apartments-one__title-box">
                                    <h3 class="apartments-one__title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Tipe 2 Lantai</a></h3>
                                </div>
                                <div class="apartments-one__hover">
                                    <h3 class="apartments-one__hover-title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Tipe 2 Lantai</a></h3>
                                    <p class="apartments-one__hover-text">There are many type of variations <br> pass
                                        not available</p>
                                    <div class="apartments-one__arrow">
                                        <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit."><span class="icon-right-arrow"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Apartments One Single End-->
                    <!--Apartments One Single Start-->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="apartments-one__single">
                            <div class="apartments-one__img">
                                <img src="{{asset('assets/images/house-display-2.png')}}" alt="">
                                <div class="apartments-one__title-box">
                                    <h3 class="apartments-one__title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Tipe 3 Lantai</a></h3>
                                </div>
                                <div class="apartments-one__hover">
                                    <h3 class="apartments-one__hover-title"><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Tipe 3 Lantai</a></h3>
                                    <p class="apartments-one__hover-text">There are many type of variations <br> pass
                                        not available</p>
                                    <div class="apartments-one__arrow">
                                        <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit."><span class="icon-right-arrow"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Apartments One Single End-->
                    <!--Apartments One Single End-->
                </div>
            </div>
        </section>
        <!--Apartments One End-->

        <!--Neighborhoods Start-->
        <section class="neighborhoods">
            <div class="neighborhoods-bg"
                style="background-image: url('{{ asset('/assets/images/neighborhoods-bg.jpg')}}');"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Sekeliling</span>
                    <h2 class="section-title__title">Lokasi Strategis</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="neighborhoods__left">
                            <div class="neighborhoods__faq">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Shopping</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>1. Mal Puri Indah</p>
                                                <p>2. Lippo Mall Puri</p>
                                                <p>3. Plaza Senayan</p>
                                                <p>4. Pondok Indah Mall</p>
                                                <p>5. Ikea Alam Sutera</p>
                                                <p>6. Swalayan Superindo</p>
                                                <p>7. Lotte Grosir</p>
                                                <p>8. Ranch Market</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Education</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>1. Universitas Binus</p>
                                                <p>2. Universitas Multimedia Nusantara</p>
                                                <p>3. Universitas Mercu Buana</p>
                                                <p>4. Universitas Esa Unggul</p>
                                                <p>5. Sekolah International IPEKA</p>
                                                <p>6. SMP Notre Dame</p>
                                                <p>7. SD Penabur</p>
                                                <p>8. TK Stela Maris</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Rumah Sakit</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>1. Rumah Sakit Siloam</p>
                                                <p>2. Rumah Sakit Mandaya</p>
                                                <p>3. Rumah Sakit Pondok Indah Puri</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Akses Tol</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>1. Pintu Tol Meruya</p>
                                                <p>2. Pintu Tol Joglo</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="neighborhoods__right">
                            <div class="neighborhoods__img-box">
                                <div class="neighborhoods__img">
                                    <img src="{{asset('assets/images/map-1.png')}}" alt="">
                                </div>
                                <!-- <div class="neighborhoods__location-1">
                                    <div class="neighborhoods__map-markar"></div>
                                    <div class="neighborhoods__popup-box">
                                        <div class="neighborhoods__popup">
                                            <div class="neighborhoods__popup-inner">
                                                <h5 class="neighborhoods__popup-title">Restauant</h5>
                                                <p class="neighborhoods__popup-text">Metropolitan Opera House
                                                    Lincoln Center
                                                    Theater New York</p>
                                                <span class="neighborhoods__popup-km">13.5KM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="neighborhoods__location-1 neighborhoods__location-2">
                                    <div class="neighborhoods__map-markar neighborhoods__map-markar-2"></div>
                                    <div class="neighborhoods__popup-box">
                                        <div class="neighborhoods__popup">
                                            <div class="neighborhoods__popup-inner">
                                                <h5 class="neighborhoods__popup-title">Central park</h5>
                                                <p class="neighborhoods__popup-text">Metropolitan Opera House
                                                    Lincoln Center
                                                    Theater New York</p>
                                                <span class="neighborhoods__popup-km">13.5KM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="neighborhoods__location-1 neighborhoods__location-3">
                                    <div class="neighborhoods__map-markar neighborhoods__map-markar-3"></div>
                                    <div class="neighborhoods__popup-box">
                                        <div class="neighborhoods__popup">
                                            <div class="neighborhoods__popup-inner">
                                                <h5 class="neighborhoods__popup-title">Shopping center</h5>
                                                <p class="neighborhoods__popup-text">Metropolitan Opera House
                                                    Lincoln Center
                                                    Theater New York</p>
                                                <span class="neighborhoods__popup-km">13.5KM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="neighborhoods__location-1 neighborhoods__location-4">
                                    <div class="neighborhoods__map-markar neighborhoods__map-markar-4"></div>
                                    <div class="neighborhoods__popup-box">
                                        <div class="neighborhoods__popup">
                                            <div class="neighborhoods__popup-inner">
                                                <h5 class="neighborhoods__popup-title">Hospitals</h5>
                                                <p class="neighborhoods__popup-text">Metropolitan Opera House
                                                    Lincoln Center
                                                    Theater New York</p>
                                                <span class="neighborhoods__popup-km">13.5KM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Neighborhoods End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-one__inner">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 1
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 1
                        },
                        "1199": {
                            "spaceBetween": 20,
                            "slidesPerView": 1
                        }
                    }}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/thropy-list.svg')}}" alt="">
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">contact now</span>
                                <h2 class="section-title__title">Get in touch with us</h2>
                            </div>
                            <div class="contact-one__person" style="margin-bottom: 60px;">
                                <div class="contact-one__person-content">
                                    <img src="{{asset('/assets/images/contact-image-1.svg')}}" alt="">
                                </div>
                            </div>
                            <!-- <p class="contact-one__text-1">Lorem ipsum dolor sit amet, consecte adipiscing elit. In hac
                                habitasse platea dictumst. Duis porta, quam ut finibus ultrices.</p> -->
                            <ul class="list-unstyled contact-one__list">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Have any question?</p>
                                        <h4> <span>Free</span> <a href="tel:0818830153">0818 830 153</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>Write email</p>
                                        <h4><a href="mailto:needhelp@company.com">WWW.PURINUSAKEMBANGAN.COM</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-one__right">
                            <div class="row">
                                <div class="contact-one__form-box">
                                    <form action="assets/inc/sendemail.php"
                                        class="contact-one__form contact-one-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="contact-one__input-box">
                                                    <input type="text" placeholder="Your name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="contact-one__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-one__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write message"></textarea>
                                                </div>
                                                <div class="contact-one__btn-box">
                                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="thm-btn contact-one__btn">Send a
                                                        Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What’s Happening</span>
                    <h2 class="section-title__title">Latest news updates <br> & articles</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="https://asset.kompas.com/crops/gxFLT6KuAHJDDKrd2CFLrHnlcJU=/0x0:4160x2773/750x500/data/photo/2023/11/29/6566e0b7493f4.jpg" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__date">
                                    <p>18 april</p>
                                </div>
                                <div class="news-one__content">
                                    <p class="news-one__author">by Muhdany Yusuf Laksono</p>
                                    <h3 class="news-one__title"><a href="https://www.kompas.com/properti/read/2023/11/29/143000221/sambut-momen-gratis-ppn-purinusa-jayakusuma-rilis-hunian-baru-di-jakbar?page=all">
                                        Sambut Momen Gratis PPN, Purinusa Jayakusuma Rilis Hunian Baru di Jakbar</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="news-one__more"> <i
                                            class="fa fa-arrow-right"></i> Read More</a>
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="news-one__comments"> <i
                                            class="fas fa-comments"></i> 2 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="https://img.inews.co.id/media/600/files/networks/2023/11/28/5e559_purinusa-kembangan.jpg" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__date">
                                    <p>18 april</p>
                                </div>
                                <div class="news-one__content">
                                    <p class="news-one__author">by Darmawan</p>
                                    <h3 class="news-one__title"><a href="https://tangsel.inews.id/view/376162/purinusa-kembangan-ditargetkan-soldout-diawal-tahun-2024">Purinusa Kembangan Ditargetkan Soldout Diawal Tahun 2024 
                                        <br>
                                        <br>
                                        <br>
                                    </a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="news-one__more"> <i
                                            class="fa fa-arrow-right"></i> Read More</a>
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="news-one__comments"> <i
                                            class="fas fa-comments"></i> 2 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="https://asset.kompas.com/crops/gxFLT6KuAHJDDKrd2CFLrHnlcJU=/0x0:4160x2773/750x500/data/photo/2023/11/29/6566e0b7493f4.jpg" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__date">
                                    <p>18 april</p>
                                </div>
                                <div class="news-one__content">
                                    <p class="news-one__author">by Muhdany Yusuf Laksono</p>
                                    <h3 class="news-one__title"><a href="https://www.kompas.com/properti/read/2023/11/29/143000221/sambut-momen-gratis-ppn-purinusa-jayakusuma-rilis-hunian-baru-di-jakbar?page=all">
                                        Sambut Momen Gratis PPN, Purinusa Jayakusuma Rilis Hunian Baru di Jakbar</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="news-one__more"> <i
                                            class="fa fa-arrow-right"></i> Read More</a>
                                    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="news-one__comments"> <i
                                            class="fas fa-comments"></i> 2 Comments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Gallery One Start-->
        <section class="gallery-one">
            <div class="gallery-one__container">
                <div class="gallery-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 0,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":3
                        },
                        "992":{
                            "items": 4
                        },
                        "1200":{
                            "items": 4
                        }
                    }
                }'>
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{asset('assets/images/highlight-1.png')}}" alt="" style="height: 203px;">
                                <div class="gallery-one__icon">
                                    <a class="img-popup" href="{{asset('assets/images/highlight-1.png')}}"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{asset('assets/images/highlight-2.png')}}" alt="" style="height: 203px;">
                                <div class="gallery-one__icon">
                                    <a class="img-popup" href="{{asset('assets/images/highlight-2.png')}}"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{asset('assets/images/highlight-3.png')}}" alt="" style="height: 203px;">
                                <div class="gallery-one__icon">
                                    <a class="img-popup" href="{{asset('assets/images/highlight-3.png')}}"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{asset('assets/images/highlight-4.png')}}" alt="" style="height: 203px;">
                                <div class="gallery-one__icon">
                                    <a class="img-popup" href="{{asset('assets/images/highlight-4.png')}}"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery One Single End-->
                    <!--Gallery One Single Start-->
                    <!-- <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="assets/images/gallery/gallery-1-5.jpg" alt="">
                                <div class="gallery-one__icon">
                                    <a class="img-popup" href="assets/images/gallery/gallery-1-5.jpg"><span
                                            class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--Gallery One Single End-->
                </div>
            </div>
        </section>
        <!--Gallery One End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="site-footer__shape-1 float-bob-x">
                    <img src="{{ asset('assets/images/site-footer-shape-1.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">Your Next Level of Home </p>
                                    </div>
                                    <div class="site-footer__social">
                                        @if(isset($general['content']->twitter_link)) 
                                            <a href="{{$general['content']->twitter_link}}"><i class="fab fa-twitter"></i></a>
                                        @endif
                                        @if(isset($general['content']->facebook_link)) 
                                            <a href="{{$general['content']->facebook_link}}"><i class="fab fa-facebook"></i></a>
                                        @endif
                                        <a href="{{$general['content']->instagram_link}}"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__Explore">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Explore</h3>
                                    </div>
                                    <ul class="footer-widget__Explore-list list-unstyled">
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Custom Widget</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Shortcodes</a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit.">Blank page</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__find">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Find</h3>
                                    </div>
                                    <p class="footer-widget__find-text">30 Broklyn Golden Street, New <br> York United
                                        States of <br> America</p>
                                </div>
                            </div> -->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__Contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact</h3>
                                    </div>
                                    <ul class="footer-widget__Contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-phone-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:{{$general['content']->contact_number}}">{{$general['content']->contact_number}}</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>{{$general['content']->working_hour}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2023 by <a href="/">purinusakembangan.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{asset('assets/images/logo-3.png')}}" width="122"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <!-- <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li> -->
                <!-- <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li> -->
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
    <a href="https://api.whatsapp.com/send?phone=6281317876888&text=Hi, Saya ingin menjadwalkan visit." class="floating" target="_blank">
        <i class="fab fa-whatsapp fab-icon"></i>
    </a>

    <script src="{{url('/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{url('/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{url('/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{url('/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{url('/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{url('/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{url('/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{url('/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{url('/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{url('/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{url('/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('/assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{url('/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{url('/assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{url('/assets/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{url('/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <!-- template js -->
    <script src="{{url('/js/aports.js')}}"></script>
</body>

</html>