<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <!-- =========================================================
         BASIC META
    ========================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <meta name="description"
        content="{{ $settings->site_description ?? $settings->site_name }}">
    <meta name="keywords"
        content="{{ $settings->site_keywords ?? $settings->site_name }}">
    <meta name="author" content="{{ $settings->site_name }}">

    <!-- Page Title -->
    <title>{{ $settings->site_name }}</title>


    <!-- =========================================================
         CANONICAL URL
    ========================================================== -->
    <link rel="canonical" href="{{ url()->current() }}">


    <!-- =========================================================
         SOCIAL MEDIA / OPEN GRAPH
         Facebook | WhatsApp | LinkedIn | Telegram | etc.
    ========================================================== -->

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $settings->site_name }}">
    <meta property="og:description"
        content="{{ $settings->site_description ?? $settings->site_name }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $settings->site_name }}">
    <meta property="og:locale" content="en_US">

    @php
        /*
         * Use a dedicated social sharing image if available.
         * Otherwise fall back to the favicon.
         */
        $socialImage = !empty($settings->social_share_image)
            ? $settings->social_share_image
            : $settings->favicon;

        $socialImageUrl = url('storage/app/public/' . $socialImage);
    @endphp

    <meta property="og:image" content="{{ $socialImageUrl }}">
    <meta property="og:image:secure_url" content="{{ $socialImageUrl }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $settings->site_name }}">


    <!-- =========================================================
         TWITTER / X
    ========================================================== -->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $settings->site_name }}">
    <meta name="twitter:description"
        content="{{ $settings->site_description ?? $settings->site_name }}">
    <meta name="twitter:image" content="{{ $socialImageUrl }}">
    <meta name="twitter:image:alt" content="{{ $settings->site_name }}">


    <!-- =========================================================
         FAVICON
    ========================================================== -->

    <link rel="shortcut icon"
        type="image/x-icon"
        href="{{ url('storage/app/public/' . $settings->favicon) }}">

    <link rel="icon"
        type="image/x-icon"
        href="{{ url('storage/app/public/' . $settings->favicon) }}">

    <link rel="apple-touch-icon"
        href="{{ url('storage/app/public/' . $settings->favicon) }}">


    <!-- =========================================================
         GOOGLE FONTS
    ========================================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">


    <!-- =========================================================
         CUSTOM FONTS
    ========================================================== -->

    <link href="{{ url('home-assets/css/fonts.css') }}"
        rel="stylesheet"
        media="screen">


    <!-- =========================================================
         BOOTSTRAP
    ========================================================== -->

    <link href="{{ url('home-assets/css/bootstrap.min.css') }}"
        rel="stylesheet"
        media="screen">


    <!-- =========================================================
         SLICKNAV
    ========================================================== -->

    <link href="{{ url('home-assets/css/slicknav.min.css') }}"
        rel="stylesheet">


    <!-- =========================================================
         SWIPER
    ========================================================== -->

    <link rel="stylesheet"
        href="{{ url('home-assets/css/swiper-bundle.min.css') }}">


    <!-- =========================================================
         FONT AWESOME
    ========================================================== -->

    <link href="{{ url('home-assets/css/all.min.css') }}"
        rel="stylesheet"
        media="screen">


    <!-- =========================================================
         ANIMATIONS
    ========================================================== -->

    <link href="{{ url('home-assets/css/animate.css') }}"
        rel="stylesheet">


    <!-- =========================================================
         MAGNIFIC POPUP
    ========================================================== -->

    <link rel="stylesheet"
        href="{{ url('home-assets/css/magnific-popup.css') }}">


    <!-- =========================================================
         MOUSE CURSOR
    ========================================================== -->

    <link rel="stylesheet"
        href="{{ url('home-assets/css/mousecursor.css') }}">


    <!-- =========================================================
         MAIN CUSTOM CSS
    ========================================================== -->

    <link href="{{ url('home-assets/css/custom.css') }}"
        rel="stylesheet"
        media="screen">
</head>

<body class="antialiased text-gray-200 bg-gray-900 font-sans min-h-screen flex flex-col">
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ URL('storage/app/public/' . $settings->favicon) }}" alt="">
            </div>
            {{ $settings->site_name }}
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="/">
                        <img src="{{ URL('storage/app/public/' . $settings->logo) }}" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a>
                                <li class="nav-item"><a class="nav-link" href="/about">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="/register" class="btn-default btn-highlighted">Register</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->




    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>







    <!-- Main Footer Start -->
    <div class="main-footer bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ URL('storage/app/public/' . $settings->logo) }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content start -->
                        <div class="about-footer-content">
                            <p>We are a trusted finance and consulting firm dedicated to helping businesses &
                                individuals make smarter financial decisions.</p>
                        </div>
                        <!-- About Footer Content End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-xl-8">
                    <!-- Footer Links Box Start -->
                    <div class="footer-links-box">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                {{-- <li><a href="{{ route('services') }}">Our Services</a></li> --}}
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Links Start -->
                        <div class="footer-links footer-working-hours-links">
                            <h2>Working Hours</h2>
                            <ul>
                                <li><span>Monday - Friday:</span>09:00 AM - 05:00 PM</li>
                                <li><span>Saturday:</span>09:00 AM - 05:00 PM</li>
                                <li><span>Sunday:</span>Closed</li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    <!-- Footer Links Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Info Box Start -->
                    <div class="footer-info-box">
                        <!-- Footer Newsletter Form Box Start -->
                        <div class="footer-newsletter-form-box">
                            <h2>Subscribe Our Newsletter</h2>
                            <form id="newslettersForm"
                                onsubmit="window.alert('Newsletter subscribed! Chat with us.on Live Chat')">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail"
                                        placeholder="Enter Your E-mail" required="">
                                    <button type="submit" class="newsletter-btn"><i
                                            class="fa-regular fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Form Box End -->

                        <!-- Footer Contact Items list Start -->
                        <div class="footer-contact-items-list">
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ URL('home-assets/images/icon-mail-white.svg') }}" alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>Email Address</p>
                                    <h3><a
                                            href="mailto:{{ $settings->contact_email }}">{{ $settings->contact_email }}</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="{{ URL('home-assets/images/icon-location-white.svg') }}"
                                        alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>Our Address</p>
                                    <h3>6391 Elgin Celina, Delaware 102</h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Contact Items list End -->
                    </div>
                    <!-- Footer Info Box Start -->
                </div>

                <div class="col-lg-12">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © 2026 All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script src="{{ URL('home-assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Circle Progress Js File -->
    <script src="{{ URL('home-assets/js/circle-progress.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ URL('home-assets/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ URL('home-assets/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ URL('home-assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ URL('home-assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ URL('home-assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL('home-assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ URL('home-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ URL('home-assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ URL('home-assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ URL('home-assets/js/gsap.min.js') }}"></script>
    <script src="{{ URL('home-assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ URL('home-assets/js/SplitText.min.js') }}"></script>
    <script src="{{ URL('home-assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ URL('home-assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ URL('home-assets/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ URL('home-assets/js/function.js') }}"></script>
    <!-- <script src="../assets/js/theme-panel-dynamic.js"></script> -->

    @include('layouts.livechat')
    @include('layouts.lang')
</body>

</html>
