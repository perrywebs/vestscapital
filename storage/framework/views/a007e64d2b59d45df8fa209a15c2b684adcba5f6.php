<?php $__env->startSection('title', 'Home'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Hero Section Start -->
    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Finance & Consulting Experts</span>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Empowering your business with expert
                                financial</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We provide expert financial guidance and strategic
                                consulting to help you overcome challenges, optimize performance.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="/register" class="btn-default btn-highlighted">Get Started</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-xl-5">
                    <!-- Hero Support Box Start -->
                    <div class="hero-support-box wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo e(URL('home-assets/images/icon-hero-support.svg')); ?>" alt="">
                        </div>
                        <div class="hero-support-box-content">
                            <h2>Support That Drives Your Business</h2>
                            <ul>
                                <li>Email Us: <a href="mailto:<?php echo e($settings->contact_email); ?>"><?php echo e($settings->contact_email); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Hero Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">About Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Guiding you toward financial growth and
                                stability</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We provide expert financial guidance & strategic
                                consulting to help you overcome challenges, optimize performance and build a strong
                                foundation for sustainable growth and long term stability.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- About Us Body Image Start -->
                            <div class="about-us-body-image">
                                <figure class="image-anime">
                                    <img src="<?php echo e(URL('home-assets/images/about-us-body-image.jpg')); ?>" alt="">
                                </figure>
                            </div>
                            <!-- About Us Body Image End -->

                            <!-- About Body Item Start -->
                            <div class="about-body-item">
                                <div class="about-body-item-header">
                                    <div class="icon-box">
                                        <img src="<?php echo e(URL('home-assets/images/icon-about-us-info.svg')); ?>" alt="">
                                    </div>
                                    <div class="about-body-item-title">
                                        <h3>Financial Partner</h3>
                                    </div>
                                </div>
                                <div class="about-body-item-content">
                                    <p>We work closely with you to understand your goals & provide consulting.</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn">
                                <a class="btn-default" href="about.html">More About Us</a>
                            </div>
                            <!-- About Us Button End -->

                            <!-- About Us Author Box Start -->
                            <div class="about-us-author-box">
                                <!-- About Author Image Start -->
                                <div class="about-us-author-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo e(URL('home-assets/images/author-1.jpg')); ?>" alt="">
                                    </figure>
                                </div>
                                <!-- About Author Image End -->

                                <!-- About Author Content Start -->
                                <div class="about-us-author-content">
                                    <h3>Kristin Watson</h3>
                                    <p>CEO & Founder</p>
                                </div>
                                <!-- About Author Content End -->
                            </div>
                            <!-- About Us Author Box End -->
                        </div>
                        <!-- About us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp" data-wow-delay="0.2s">
                        <!-- About Us Image Start -->
                        <div class="about-us-image box-1">
                            <figure class="image-anime">
                                <img src="<?php echo e(URL('home-assets/images/about-us-image-box-image-1.jpg')); ?>" alt="">
                            </figure>
                        </div>
                        <!-- About Us Image End -->

                        <!-- About Us Image 2 Start -->
                        <div class="about-us-image box-2">
                            <figure class="image-anime">
                                <img src="<?php echo e(URL('home-assets/images/about-us-image-box-image-2.jpg')); ?>" alt="">
                            </figure>
                        </div>
                        <!-- About Us Image 2 End -->

                        <!-- About Us Counter Box Start -->
                        <div class="about-us-counter-box">
                            <div class="about-us-counter-body">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                        <!-- About Us Counter Box End -->

                        <!-- Contact Us Circle Start -->
                        <div class="contact-us-circle">
                            <a href="contact.html">
                                <img src="<?php echo e(URL('home-assets/images/contact-us-circle.svg')); ?>" alt="">
                            </a>
                        </div>
                        <!-- Contact Us Circle End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services bg-section dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Expert financial & consulting services you can
                            trust</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Content Btn Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our services combine industry expertise and strategic insights to deliver reliable solutions
                                that support your financial goals and business success.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a class="btn-default btn-highlighted" href="services.html">View All Services</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Service Slider Start -->
                    <div class="service-item-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Service Item Start -->
                                    <div class="service-item">
                                        <!-- Service Item Header Box Start -->
                                        <div class="service-item-header-box">
                                            <div class="service-item-header">
                                                <div class="icon-box">
                                                    <img src="<?php echo e(URL('home-assets/images/icon-service-item-1.svg')); ?>" alt="">
                                                </div>
                                                <div class="service-item-title">
                                                    <h2><a href="service-single.html">Investment Advisory</a></h2>
                                                </div>
                                            </div>
                                            <div class="service-item-content">
                                                <p>Helping healthcare & wellness businesses optimize financial performance,
                                                    manage risks and maintain regulatory.</p>
                                            </div>
                                        </div>
                                        <!-- Service Item Header Box End -->

                                        <!-- Service Item Image Start -->
                                        <div class="service-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo e(URL('home-assets/images/service-image-1.jpg')); ?>" alt="">
                                            </figure>

                                            <!-- Service Item Button Start-->
                                            <div class="service-item-btn">
                                                <a href="service-single.html"><img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>"
                                                        alt=""></a>
                                            </div>
                                            <!-- Service Item Button End-->
                                        </div>
                                        <!-- Service Item Image End -->
                                    </div>
                                    <!-- Service Item End -->
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Service Item Start -->
                                    <div class="service-item">
                                        <!-- Service Item Header Box Start -->
                                        <div class="service-item-header-box">
                                            <div class="service-item-header">
                                                <div class="icon-box">
                                                    <img src="<?php echo e(URL('home-assets/images/icon-service-item-2.svg')); ?>" alt="">
                                                </div>
                                                <div class="service-item-title">
                                                    <h2><a href="service-single.html">Financial Planning</a></h2>
                                                </div>
                                            </div>
                                            <div class="service-item-content">
                                                <p>We develop customized financial strategies that help you improve
                                                    financial planning performance and manage resources.</p>
                                            </div>
                                        </div>
                                        <!-- Service Item Header Box End -->

                                        <!-- Service Item Image Start -->
                                        <div class="service-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo e(URL('home-assets/images/service-image-2.jpg')); ?>" alt="">
                                            </figure>

                                            <!-- Service Item Button Start-->
                                            <div class="service-item-btn">
                                                <a href="service-single.html"><img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>"
                                                        alt=""></a>
                                            </div>
                                            <!-- Service Item Button End-->
                                        </div>
                                        <!-- Service Item Image End -->
                                    </div>
                                    <!-- Service Item End -->
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Service Item Start -->
                                    <div class="service-item">
                                        <!-- Service Item Header Box Start -->
                                        <div class="service-item-header-box">
                                            <div class="service-item-header">
                                                <div class="icon-box">
                                                    <img src="<?php echo e(URL('home-assets/images/icon-service-item-3.svg')); ?>" alt="">
                                                </div>
                                                <div class="service-item-title">
                                                    <h2><a href="service-single.html">Wealth Management</a></h2>
                                                </div>
                                            </div>
                                            <div class="service-item-content">
                                                <p>We provide expert investment advice and portfolio management solutions
                                                    designed to maximize returns and minimize risks.</p>
                                            </div>
                                        </div>
                                        <!-- Service Item Header Box End -->

                                        <!-- Service Item Image Start -->
                                        <div class="service-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo e(URL('home-assets/images/service-image-3.jpg')); ?>" alt="">
                                            </figure>

                                            <!-- Service Item Button Start-->
                                            <div class="service-item-btn">
                                                <a href="service-single.html"><img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>"
                                                        alt=""></a>
                                            </div>
                                            <!-- Service Item Button End-->
                                        </div>
                                        <!-- Service Item Image End -->
                                    </div>
                                    <!-- Service Item End -->
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Service Item Start -->
                                    <div class="service-item">
                                        <!-- Service Item Header Box Start -->
                                        <div class="service-item-header-box">
                                            <div class="service-item-header">
                                                <div class="icon-box">
                                                    <img src="<?php echo e(URL('home-assets/images/icon-service-item-4.svg')); ?>" alt="">
                                                </div>
                                                <div class="service-item-title">
                                                    <h2><a href="service-single.html">Tax Planning</a></h2>
                                                </div>
                                            </div>
                                            <div class="service-item-content">
                                                <p>We help you plan & manage taxes effectively, minimizing risks while
                                                    ensuring compliance with current regulations.</p>
                                            </div>
                                        </div>
                                        <!-- Service Item Header Box End -->

                                        <!-- Service Item Image Start -->
                                        <div class="service-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo e(URL('home-assets/images/service-image-4.jpg')); ?>" alt="">
                                            </figure>

                                            <!-- Service Item Button Start-->
                                            <div class="service-item-btn">
                                                <a href="service-single.html"><img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>"
                                                        alt=""></a>
                                            </div>
                                            <!-- Service Item Button End-->
                                        </div>
                                        <!-- Service Item Image End -->
                                    </div>
                                    <!-- Service Item End -->
                                </div>
                                <!-- Service Slide End -->

                                <!-- Service Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Service Item Start -->
                                    <div class="service-item">
                                        <!-- Service Item Header Box Start -->
                                        <div class="service-item-header-box">
                                            <div class="service-item-header">
                                                <div class="icon-box">
                                                    <img src="<?php echo e(URL('home-assets/images/icon-service-item-5.svg')); ?>" alt="">
                                                </div>
                                                <div class="service-item-title">
                                                    <h2><a href="service-single.html">Tax Planning</a></h2>
                                                </div>
                                            </div>
                                            <div class="service-item-content">
                                                <p>We help you plan & manage taxes effectively, minimizing risks while
                                                    ensuring compliance with current regulations.</p>
                                            </div>
                                        </div>
                                        <!-- Service Item Header Box End -->

                                        <!-- Service Item Image Start -->
                                        <div class="service-item-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo e(URL('home-assets/images/service-image-5.jpg')); ?>" alt="">
                                            </figure>

                                            <!-- Service Item Button Start-->
                                            <div class="service-item-btn">
                                                <a href="service-single.html"><img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>"
                                                        alt=""></a>
                                            </div>
                                            <!-- Service Item Button End-->
                                        </div>
                                        <!-- Service Item Image End -->
                                    </div>
                                    <!-- Service Item End -->
                                </div>
                                <!-- Service Slide End -->
                            </div>
                            <div class="service-pagination"></div>
                        </div>
                    </div>
                    <!-- Service Slider End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="<?php echo e(URL('home-assets/images/author-1.jpg')); ?>" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="<?php echo e(URL('home-assets/images/icon-phone-white.svg')); ?>" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->
                        <p>Let's make something great work together. <a href="<?php echo e(route('contact')); ?>">Get Free Quote</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Image Box Start -->
                    <div class="why-choose-image-box wow fadeInUp">
                        <!-- Why Choose Image Box 1 Start -->
                        <div class="why-choose-image-box-1">
                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image">
                                <figure class="image-anime">
                                    <img src="<?php echo e(URL('home-assets/images/why-choose-image-1.jpg')); ?>" alt="">
                                </figure>

                                <!-- Contact Us Circle Start -->
                                <div class="contact-us-circle">
                                    <a href="<?php echo e(route('contact')); ?>">
                                        <img src="<?php echo e(URL('home-assets/images/contact-us-circle.svg')); ?>" alt="">
                                    </a>
                                </div>
                                <!-- Contact Us Circle End -->
                            </div>
                            <!-- Why Choose Image End -->

                            <!-- Google Rating Box Start -->
                            <div class="google-rating-box">
                                <div class="google-rating-logo">
                                    <img src="<?php echo e(URL('home-assets/images/icon-google.svg')); ?>" alt="">
                                </div>
                                <div class="google-rating-info">
                                    <div class="google-rating-info-header">
                                        <h2><span class="counter">4.9</span>/5.0</h2>
                                        <span class="google-rating-star"><i class="fa fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="google-rating-info-content">
                                        <p>Based on <b>2K+</b> Reviews</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Google Rating Box End -->
                        </div>
                        <!-- Why Choose Image Box 1 End -->

                        <!-- Why Choose Image Box 2 Start -->
                        <div class="why-choose-image-box-2 why-choose-image">
                            <figure class="image-anime">
                                <img src="<?php echo e(URL('home-assets/images/why-choose-image-2.jpg')); ?>" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Image Box 2 End -->
                    </div>
                    <!-- Why Choose Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Why Choose Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reliable financial solutions backed by
                                experience</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We combine years of industry experience with
                                data-driven insights to deliver reliable financial solutions tailored to your needs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-why-choose-item-1.svg')); ?>" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Data Driven Strategies</h3>
                                    <p>We use market insight & analytics to create smart strategy.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-why-choose-item-2.svg')); ?>" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Customized Solutions</h3>
                                    <p>We provide tailored financial & consulting services.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Item List End -->

                        <!-- Section Footer Text Start -->
                        <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Satisfy Client Images Start -->
                            <div class="satisfy-client-images">
                                <div class="satisfy-client-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo e(URL('home-assets/images/author-1.jpg')); ?>" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-image add-more">
                                    <i><img src="<?php echo e(URL('home-assets/images/icon-phone-white.svg')); ?>" alt=""></i>
                                </div>
                            </div>
                            <!-- Satisfy Client Images End -->
                            <p>Let's make something great work together. <a href="<?php echo e(route('contact')); ?>">Get Free Quote</a></p>
                        </div>
                        <!-- Section Footer Text End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video bg-section dark-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Watch Our Story</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Discover the vision behind our financial
                            expertise</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Learn how we empower businesses & individuals with
                            strategic guidances, innovative solutions, and a commitment to long-term success.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6 col-md-3">
                    <!-- Intro Video Circle Start -->
                    <div class="intro-video-circle wow fadeInUp">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"
                            data-cursor-text="Play">
                            <img src="<?php echo e(URL('home-assets/images/intro-video-circle.svg')); ?>" alt="">
                        </a>
                    </div>
                    <!-- Intro Video Circle End -->
                </div>

                <div class="col-lg-12">
                    <!-- Intro Video Items List Start -->
                    <div class="intro-video-items-list">
                        <!-- Intro Video Item Start -->
                        <div class="intro-video-item">
                            <div class="intro-video-list-header">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-intro-video-1.svg')); ?>" alt="">
                                </div>
                                <div class="intro-video-item-title">
                                    <h3>Transactions Advised</h3>
                                </div>
                            </div>
                            <div class="intro-video-counter-content">
                                <h2>$<span class="counter">1</span>B<sup>+</sup></h2>
                                <p>Major financial decisions with strategic insights</p>
                            </div>
                        </div>
                        <!-- Intro Video Item End -->

                        <!-- Intro Video Item Start -->
                        <div class="intro-video-item">
                            <div class="intro-video-list-header">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-intro-video-2.svg')); ?>" alt="">
                                </div>
                                <div class="intro-video-item-title">
                                    <h3>Countries Reached</h3>
                                </div>
                            </div>
                            <div class="intro-video-counter-content">
                                <h2><span class="counter">50</span><sup>+</sup></h2>
                                <p>Serving client globally with tailored strategies</p>
                            </div>
                        </div>
                        <!-- Intro Video Item End -->

                        <!-- Intro Video Item Start -->
                        <div class="intro-video-item">
                            <div class="intro-video-list-header">
                                <div class="icon-box">
                                    <img src="<?php echo e(URL('home-assets/images/icon-intro-video-3.svg')); ?>" alt="">
                                </div>
                                <div class="intro-video-item-title">
                                    <h3>Industry Experts</h3>
                                </div>
                            </div>
                            <div class="intro-video-counter-content">
                                <h2><span class="counter">100</span><sup>+</sup></h2>
                                <p>Strong team of consultant, analysts and advisors.</p>
                            </div>
                        </div>
                        <!-- Intro Video Item End -->
                    </div>
                    <!-- Intro Video Items List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Projects Section Start -->
    <div class="our-projects">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Our Projects</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Delivering financial success through proven
                            strategy</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Content Btn Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>We help businesses and individuals achieve measurable financial success through carefully
                                planned strategies, data driven insights.</p>
                        </div>
                        <!-- Section Title Content End -->
                    </div>
                    <!-- Section Content Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Project Slider Start -->
                    <div class="project-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Project Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <!-- Project Item Image End -->

                                        <!-- Project Item Content Start -->
                                        <div class="project-item-content">
                                            <ul>
                                                <li><a href="#">Financial Planning</a></li>
                                            </ul>
                                            <h2><a href="<?php echo e(route('register')); ?>">Startup financial strategy development</a>
                                            </h2>
                                        </div>
                                        <!-- Project Item Content End -->
                                    </div>
                                </div>
                                <!-- Project Slide End -->

                                <!-- Project Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <!-- Project Item Image Start -->
                                        <div class="project-item-image">
                                            <a href="<?php echo e(route('register')); ?>" data-cursor-text="View">
                                                <figure>
                                                    <img src="<?php echo e(URL('home-assets/images/project-2.jpg')); ?>" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Project Item Image End -->

                                        <!-- Project Item Button Start -->
                                        <div class="project-item-btn">
                                            <a href="<?php echo e(route('register')); ?>" data-cursor-text="View">
                                                <img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- Project Item Button End -->

                                        <!-- Project Item Content Start -->
                                        <div class="project-item-content">
                                            <ul>
                                                <li><a href="#">Risk Management</a></li>
                                            </ul>
                                            <h2><a href="<?php echo e(route('register')); ?>">Financial Risk Analysis and Protection</a>
                                            </h2>
                                        </div>
                                        <!-- Project Item Content End -->
                                    </div>
                                </div>
                                <!-- Project Slide End -->

                                <!-- Project Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <!-- Project Item Image Start -->
                                        <div class="project-item-image">
                                            <a href="<?php echo e(route('register')); ?>" data-cursor-text="View">
                                                <figure>
                                                    <img src="<?php echo e(URL('home-assets/images/project-3.jpg')); ?>" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Project Item Image End -->

                                        <!-- Project Item Button Start -->
                                        <div class="project-item-btn">
                                            <a href="<?php echo e(route('register')); ?>">
                                                <img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- Project Item Button End -->

                                        <!-- Project Item Content Start -->
                                        <div class="project-item-content">
                                            <ul>
                                                <li><a href="#">Financial Consulting</a></li>
                                            </ul>
                                            <h2><a href="<?php echo e(route('register')); ?>">Complete Financial Restructuring</a></h2>
                                        </div>
                                        <!-- Project Item Content End -->
                                    </div>
                                </div>
                                <!-- Project Slide End -->

                                <!-- Project Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <!-- Project Item Image Start -->
                                        <div class="project-item-image">
                                            <a href="<?php echo e(route('register')); ?>" data-cursor-text="View">
                                                <figure>
                                                    <img src="<?php echo e(URL('home-assets/images/project-4.jpg')); ?>" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Project Item Image End -->

                                        <!-- Project Item Button Start -->
                                        <div class="project-item-btn">
                                            <a href="<?php echo e(route('register')); ?>">
                                                <img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- Project Item Button End -->

                                        <!-- Project Item Content Start -->
                                                    alt=""></a>
                                        </div>
                                        <!-- Project Item Button End -->

                                        <!-- Project Item Content Start -->
                                        <div class="project-item-content">
                                            <ul>
                                                <li><a href="#">Tax Consulting</a></li>
                                            </ul>
                                            <h2><a href="project-single.html">Advance Tax Planning and Compliance</a></h2>
                                        </div>
                                        <!-- Project Item Content End -->
                                    </div>
                                </div>
                                <!-- Project Slide End -->

                                <!-- Project Slide Start -->
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <!-- Project Item Image Start -->
                                        <div class="project-item-image">
                                            <a href="<?php echo e(route('register')); ?>" data-cursor-text="View">
                                                <figure>
                                                    <img src="<?php echo e(URL('home-assets/images/project-5.jpg')); ?>" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- Project Item Image End -->

                                        <!-- Project Item Button Start -->
                                        <div class="project-item-btn">
                                            <a href="<?php echo e(route('register')); ?>">
                                                <img src="<?php echo e(URL('home-assets/images/arrow-white.svg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- Project Item Button End -->

                                        <!-- Project Item Content Start -->
                                        <div class="project-item-content">
                                            <ul>
                                                <li><a href="#">Risk Management</a></li>
                                            </ul>
                                            <h2><a href="<?php echo e(route('register')); ?>">Risk Assessment & Financial Protection</a>
                                            </h2>
                                        </div>
                                        <!-- Project Item Content End -->
                                    </div>
                                </div>
                                <!-- Project Slide End -->
                            </div>
                            <div class="project-pagination"></div>
                        </div>
                    </div>
                    <!-- Project Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Projects Section End -->

    <!-- Our Expertise Section Start -->
    <div class="our-expertise bg-section dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Industries We Serve</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Delivering financial expertise</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We provide expert financial guidance and strategic
                            insights to help businesses make informed decisions, manage risks, and achieve sustainable
                            growth.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Expertise Tab Box Start -->
                    <div class="our-expertise-tab-box tab-content wow fadeInUp" data-wow-delay="0.2s" id="expertisetab">
                        <!-- Our Expertise Nav start -->
                        <div class="our-expertise-nav">
                            <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="first-tab" data-bs-toggle="tab"
                                        data-bs-target="#first" type="button" role="tab" aria-controls="first"
                                        aria-selected="true"><span class="icon-box"><img
                                                src="<?php echo e(URL('home-assets/images/icon-our-expertise-tab-1.svg')); ?>" alt=""></span>Healthcare
                                        & Wellness</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="second-tab" data-bs-toggle="tab"
                                        data-bs-target="#second" type="button" role="tab"
                                        aria-selected="false"><span class="icon-box"><img
                                                src="<?php echo e(URL('home-assets/images/icon-our-expertise-tab-2.svg')); ?>" alt=""></span>Technology
                                        & IT Services</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="thirds-tab" data-bs-toggle="tab"
                                        data-bs-target="#third" type="button" role="tab"
                                        aria-selected="false"><span class="icon-box"><img
                                                src="<?php echo e(URL('home-assets/images/icon-our-expertise-tab-3.svg')); ?>" alt=""></span>Real
                                        Estate & Construction</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#four"
                                        type="button" role="tab" aria-selected="false"><span class="icon-box"><img
                                                src="<?php echo e(URL('home-assets/images/icon-our-expertise-tab-4.svg')); ?>" alt=""></span>Retail &
                                        E-commerce</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Our Expertise Nav End -->

                        <!-- Our Expertise Box Start -->
                        <div class="our-expertise-box tab-pane fade show active" id="first" role="tabpanel">
                            <div class="our-expertise-item">
                                <!-- Expertise Item Image Start -->
                                <div class="expertise-item-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo e(URL('home-assets/images/expertise-tab-image-1.jpg')); ?>" alt="">
                                    </figure>
                                </div>
                                <!-- Expertise Item Image End -->

                                <!--Expertise Item content Box End -->
                                <div class="expertise-item-content">
                                    <h3>Financial Solutions for Healthcare and Wellness Excellence</h3>
                                    <p>We provide expert financial guidance and tailored consulting solutions for healthcare
                                        providers and wellness businesses, helping them optimize operations, manage costs,
                                        ensure compliance, and achieve sustainable growth.</p>
                                    <ul>
                                        <li>Ensure adherence to healthcare regulations while minimizing financial risks.
                                        </li>
                                        <li>Implement long-term financial planning & investment strategies to support.</li>
                                        <li>Streamline budgeting, cost control and resource allocation for better
                                            efficiency.</li>
                                    </ul>
                                </div>
                                <!--Expertise Item content Box End -->
                            </div>
                        </div>
                        <!-- Our Expertise Box End -->

                        <!-- Our Expertise Box Start -->
                        <div class="our-expertise-box tab-pane fade" id="second" role="tabpanel">
                            <div class="our-expertise-item">
                                <!-- Expertise Item Image Start -->
                                <div class="expertise-item-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo e(URL('home-assets/images/expertise-tab-image-2.jpg')); ?>   " alt="">
                                    </figure>
                                </div>
                                <!-- Expertise Item Image End -->

                                <!--Expertise Item content Box End -->
                                <div class="expertise-item-content">
                                    <h3>Financial Solutions for Technology & IT Services Excellence</h3>
                                    <p>We provide expert financial guidance and tailored consulting solutions for healthcare
                                        providers and wellness businesses, helping them optimize operations, manage costs,
                                        ensure compliance, and achieve sustainable growth.</p>
                                    <ul>
                                        <li>Ensure adherence to healthcare regulations while minimizing financial risks.
                                        </li>
                                        <li>Implement long-term financial planning & investment strategies to support.</li>
                                        <li>Streamline budgeting, cost control and resource allocation for better
                                            efficiency.</li>
                                    </ul>
                                </div>
                                <!--Expertise Item content Box End -->
                            </div>
                        </div>
                        <!-- Our Expertise Box End -->

                        <!-- Our Expertise Box Start -->
                        <div class="our-expertise-box tab-pane fade" id="third" role="tabpanel">
                            <div class="our-expertise-item">
                                <!-- Expertise Item Image Start -->
                                <div class="expertise-item-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo e(URL('home-assets/images/expertise-tab-image-3.jpg')); ?>" alt="">
                                    </figure>
                                </div>
                                <!-- Expertise Item Image End -->

                                <!--Expertise Item content Box End -->
                                <div class="expertise-item-content">
                                    <h3>Financial Solutions for Real Estate & Construction Excellence</h3>
                                    <p>We provide expert financial guidance and tailored consulting solutions for healthcare
                                        providers and wellness businesses, helping them optimize operations, manage costs,
                                        ensure compliance, and achieve sustainable growth.</p>
                                    <ul>
                                        <li>Ensure adherence to healthcare regulations while minimizing financial risks.
                                        </li>
                                        <li>Implement long-term financial planning & investment strategies to support.</li>
                                        <li>Streamline budgeting, cost control and resource allocation for better
                                            efficiency.</li>
                                    </ul>
                                </div>
                                <!--Expertise Item content Box End -->
                            </div>
                        </div>
                        <!-- Our Expertise Box End -->

                        <!-- Our Expertise Box Start -->
                        <div class="our-expertise-box tab-pane fade" id="four" role="tabpanel">
                            <div class="our-expertise-item">
                                <!-- Expertise Item Image Start -->
                                <div class="expertise-item-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo e(URL('home-assets/images/expertise-tab-image-4.jpg')); ?>" alt="">
                                    </figure>
                                </div>
                                <!-- Expertise Item Image End -->

                                <!--Expertise Item content Box End -->
                                <div class="expertise-item-content">
                                    <h3>Financial Solutions for Retail & E-commerce Excellence</h3>
                                    <p>We provide expert financial guidance and tailored consulting solutions for healthcare
                                        providers and wellness businesses, helping them optimize operations, manage costs,
                                        ensure compliance, and achieve sustainable growth.</p>
                                    <ul>
                                        <li>Ensure adherence to healthcare regulations while minimizing financial risks.
                                        </li>
                                        <li>Implement long-term financial planning & investment strategies to support.</li>
                                        <li>Streamline budgeting, cost control and resource allocation for better
                                            efficiency.</li>
                                    </ul>
                                </div>
                                <!--Expertise Item content Box End -->
                            </div>
                        </div>
                        <!-- Our Expertise Box End -->
                    </div>
                    <!-- Our Expertise Tab Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Expertise Section End -->

    <!-- Our Pricing Section Start -->
    
    <!-- Our Pricing Section End -->

    <!-- CTA Box Start -->
    <div class="cta-box bg-section dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- CTA Content Start -->
                    <div class="cta-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Contact Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Contact us for professional financial
                                advice</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2S">Connect with our team today to explore solutions
                                designed to grow your business, manage risks, and secure a stronger financial future.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- CTA Rating Box Start -->
                        <div class="cta-rating-box wow fadeInUp">
                            <div class="cta-rating-header">
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="<?php echo e(URL('home-assets/images/author-1.jpg')); ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="<?php echo e(URL('home-assets/images/author-2.jpg')); ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="<?php echo e(URL('home-assets/images/author-3.jpg')); ?>" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="<?php echo e(URL('home-assets/images/author-4.jpg')); ?>" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="cta-client-rating">
                                    <h2><span class="counter">4.9</span></h2>
                                    <i class="fa fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="cta-rating-content">
                                <p>Consistently rated highly by our clients, we take pride in delivering.</p>
                            </div>
                        </div>
                        <!-- CTA Rating Box End -->
                    </div>
                    <!-- CTA Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get In Touch</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form wow fadeInUp" data-wow-delay="0.2s">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="First Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Last Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Phone No." required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="E-mail Address" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Write Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="contact-form-btn">
                                            <button type="submit" class="btn-default btn-highlighted"><span>Send
                                                    Message</span></button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box End -->

    <!-- Our FAQ Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- FAQ Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">We're here to provide clear financial
                                guidance</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Browse through our frequently asked questions to
                                better understand our services, processes, and how we can support your financial journey.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Faq Info Box Start -->
                        <div class="faq-info-box wow fadeInUp" data-wow-delay="0.4s">
                            <h3>“ Smart financial decision today create the foundation for sustainable growth. ”</h3>
                            <ul>
                                <li>Expert backed information that helps you understand.</li>
                            </ul>
                        </div>
                        <!-- Faq Info Box End -->
                    </div>
                    <!-- FAQ Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Q1. Who can benefit from your consulting services?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Our services are designed for startups, small businesses, large enterprises, and
                                        individuals looking to improve their financial strategies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Q2. How do I get started with your services?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Our services are designed for startups, small businesses, large enterprises, and
                                        individuals looking to improve their financial strategies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    Q3. Do you offer customized financial solutions?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse show" role="region"
                                aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Our services are designed for startups, small businesses, large enterprises, and
                                        individuals looking to improve their financial strategies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Q4. How often should I review my financial plan?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Our services are designed for startups, small businesses, large enterprises, and
                                        individuals looking to improve their financial strategies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Q5. Do you help with investment planning?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Our services are designed for startups, small businesses, large enterprises, and
                                        individuals looking to improve their financial strategies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQ Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Testimonials</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What our clients say about our financial
                            expertise</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Item author Start -->
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo e(URL('home-assets/images/author-1.jpg')); ?>" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>John Anderson</h2>
                                                <p>CEO, Tech Solutions Ltd.</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item author End -->

                                        <!-- Testimonial Item Body Start -->
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“ Working with these consultants transforme the way we manage our
                                                    finance. Their strategic approach & professional are unmatch. ”</p>
                                            </div>
                                            <div class="testimonial-item-counter">
                                                <h2><span class="counter">250</span><sup>+</sup></h2>
                                                <p>Years of Combined Financial Expertise</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Item author Start -->
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo e(URL('home-assets/images/author-2.jpg')); ?>" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>Sarah Williams</h2>
                                                <p>Founder, Startup Hub</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item author End -->

                                        <!-- Testimonial Item Body Start -->
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“Professional, knowledgeable, and reliable. Their financial advice helped
                                                    us reduce costs & improve overall profitability.”</p>
                                            </div>
                                            <div class="testimonial-item-counter">
                                                <h2><span class="counter">50</span>K<sup>+</sup></h2>
                                                <p>Satisfied Clients Who Trust Our Expertise</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Item author Start -->
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo e(URL('home-assets/images/author-3.jpg')); ?>" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>Michael Brown</h2>
                                                <p>CFO, Global Ventures</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item author End -->

                                        <!-- Testimonial Item Body Start -->
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“Their insights into investment strategies helped me grow my assets and
                                                    plan for long-term financial stability.”</p>
                                            </div>
                                            <div class="testimonial-item-counter">
                                                <h2><span class="counter">65</span><sup>%</sup></h2>
                                                <p>Strategic Partnerships Built to Enhance Growth</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Item author Start -->
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo e(URL('home-assets/images/author-4.jpg')); ?>" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>Ronald Richards</h2>
                                                <p>Founder, BrightPath Consulting</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item author End -->

                                        <!-- Testimonial Item Body Start -->
                                        <div class="testimonial-item-body">
                                            <div class="testimonial-item-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>"Their financial expertise gave us the clarity we needed to scale
                                                    confidently. The team is truly invested in our success."</p>
                                            </div>
                                            <div class="testimonial-item-counter">
                                                <h2><span class="counter">25</span><sup>+</sup></h2>
                                                <p>Years of Combined Financial Expertise</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Footer Start -->
                    <div class="testimonial-footer-box wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Google Rating Box Start -->
                        <div class="google-rating-box">
                            <div class="google-rating-logo">
                                <img src="<?php echo e(URL('home-assets/images/icon-google.svg')); ?>" alt="">
                            </div>
                            <div class="google-rating-info">
                                <div class="google-rating-info-header">
                                    <h2><span class="counter">4.9</span>/5.0</h2>
                                    <span class="google-rating-star">
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                        <i class="fa fa-solid fa-star"></i>
                                    </span>
                                </div>
                                <div class="google-rating-info-content">
                                    <p>Based on 25K+ reviews</p>
                                </div>
                            </div>
                        </div>
                        <!-- Google Rating Box End -->
                    </div>
                    <!-- Testimonial Footer End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Latest Blogs</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Expert insights on finance & business growth
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Content Btn Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Stay ahead with practical advice, financial tips, & strategic insights that empower
                                businesses and individuals to build sustainable growth and financial stability.</p>
                        </div>
                        <!-- Section Title Content End -->

                    </div>
                    <!-- Section Content Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="/" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo e(URL('home-assets/images/post-1.jpg')); ?>" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="/">Top Investment Strategies for Long Term Wealth</a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="/" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo e(URL('home-assets/images/post-2.jpg')); ?>" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="/">Building a Strong Business Strategy for Success</a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="/" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="<?php echo e(URL('home-assets/images/post-3.jpg')); ?>" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="/">Top 5 Tax Planning Strategies for Small Businesses</a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\home\index.blade.php ENDPATH**/ ?>