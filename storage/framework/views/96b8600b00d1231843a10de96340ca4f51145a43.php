<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title><?php echo e($settings->site_name); ?></title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <!-- Custom Fonts Css-->
    <link href="<?php echo e(URL('home-assets/css/fonts.css')); ?>" rel="stylesheet" media="screen">
    <!-- Bootstrap Css -->
    <link href="<?php echo e(URL('home-assets/css/bootstrap.min.css')); ?>" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="<?php echo e(URL('home-assets/css/slicknav.min.css')); ?>" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?php echo e(URL('home-assets/css/swiper-bundle.min.css')); ?>">
    <!-- Font Awesome Icon Css-->
    <link href="<?php echo e(URL('home-assets/css/all.min.css')); ?>" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="<?php echo e(URL('home-assets/css/animate.css')); ?>" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="<?php echo e(URL('home-assets/css/magnific-popup.css')); ?>">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="<?php echo e(URL('home-assets/css/mousecursor.css')); ?>">
    <!-- Main Custom Css -->
    <link href="<?php echo e(URL('home-assets/css/custom.css')); ?>" rel="stylesheet" media="screen">
</head>

<body class="antialiased text-gray-200 bg-gray-900 font-sans min-h-screen flex flex-col">
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="<?php echo e(URL('storage/app/public/' . $settings->favicon)); ?>" alt=""></div>
            <?php echo e($settings->site_name); ?>

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
                        <img src="<?php echo e(URL('storage/app/public/' . $settings->logo)); ?>" alt="Logo">
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
        <?php echo $__env->yieldContent('content'); ?>
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
                            <img src="<?php echo e(URL('storage/app/public/'.$settings->logo)); ?>" alt="">
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
                                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                
                                <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
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
                            <form id="newslettersForm" onsubmit="window.alert('Newsletter subscribed! Chat with us.on Live Chat')">
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control" id="mail"
                                        placeholder="Enter Your E-mail" required="">
                                    <button type="submit" class="newsletter-btn"><i
                                            class="fa-regular fa-paper-plane" ></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Form Box End -->

                        <!-- Footer Contact Items list Start -->
                        <div class="footer-contact-items-list">
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-mail-white.svg')); ?>" alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>Email Address</p>
                                    <h3><a href="mailto:<?php echo e($settings->contact_email); ?>"><?php echo e($settings->contact_email); ?></a></h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-location-white.svg')); ?>" alt="">
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
    <script src="<?php echo e(URL('home-assets/js/jquery-3.7.1.min.js')); ?>"></script>
    <!-- Circle Progress Js File -->
    <script src="<?php echo e(URL('home-assets/js/circle-progress.min.js')); ?>"></script>
    <!-- Bootstrap js file -->
    <script src="<?php echo e(URL('home-assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Validator js file -->
    <script src="<?php echo e(URL('home-assets/js/validator.min.js')); ?>"></script>
    <!-- SlickNav js file -->
    <script src="<?php echo e(URL('home-assets/js/jquery.slicknav.js')); ?>"></script>
    <!-- Swiper js file -->
    <script src="<?php echo e(URL('home-assets/js/swiper-bundle.min.js')); ?>"></script>
    <!-- Counter js file -->
    <script src="<?php echo e(URL('home-assets/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(URL('home-assets/js/jquery.counterup.min.js')); ?>"></script>
    <!-- Magnific js file -->
    <script src="<?php echo e(URL('home-assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- SmoothScroll -->
    <script src="<?php echo e(URL('home-assets/js/SmoothScroll.js')); ?>"></script>
    <!-- Parallax js -->
    <script src="<?php echo e(URL('home-assets/js/parallaxie.js')); ?>"></script>
    <!-- MagicCursor js file -->
    <script src="<?php echo e(URL('home-assets/js/gsap.min.js')); ?>"></script>
    <script src="<?php echo e(URL('home-assets/js/magiccursor.js')); ?>"></script>
    <!-- Text Effect js file -->
    <script src="<?php echo e(URL('home-assets/js/SplitText.min.js')); ?>"></script>
    <script src="<?php echo e(URL('home-assets/js/ScrollTrigger.min.js')); ?>"></script>
    <!-- YTPlayer js File -->
    <script src="<?php echo e(URL('home-assets/js/jquery.mb.YTPlayer.min.js')); ?>"></script>
    <!-- Wow js file -->
    <script src="<?php echo e(URL('home-assets/js/wow.min.js')); ?>"></script>
    <!-- Main Custom js file -->
    <script src="<?php echo e(URL('home-assets/js/function.js')); ?>"></script>
    <!-- <script src="../assets/js/theme-panel-dynamic.js"></script> -->

    <?php echo $__env->make('layouts.livechat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views/layouts/base.blade.php ENDPATH**/ ?>