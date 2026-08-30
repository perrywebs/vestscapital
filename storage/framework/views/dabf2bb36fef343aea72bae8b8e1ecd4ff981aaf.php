<?php $__env->startSection('title', 'Contact us'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Contact Us Content Header Start -->
                        <div class="contact-us-content-header">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <span class="section-sub-title wow fadeInUp">Contact Us</span>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Start your journey towards financial
                                    success</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Take the first step toward achieving your
                                    financial goals with expert guidance and tailored strategies designed to support your
                                    growth.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Contact Info Items List Start -->
                            <div class="contact-info-items-list">
                                <!-- Conatct Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <img src="<?php echo e(URL('home-assets/images/icon-phone-white.svg')); ?>" alt="">
                                    </div>
                                    <div class="contact-info-item-content">
                                        <p>Email Address</p>
                                        <h3><a href="mailto:<?php echo e($settings->contact_email); ?>"><?php echo e($settings->contact_email); ?></a></h3>
                                    </div>
                                </div>
                                <!-- Conatct Info Item End -->

                                <!-- Conatct Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box">
                                        <img src="<?php echo e(URL('home-assets/images/icon-location-white.svg')); ?>" alt="">
                                    </div>
                                    <div class="contact-info-item-content">
                                        <p>Our Address</p>
                                        <h3>6391 Elgin St. Celina, Delaware 10299</h3>
                                    </div>
                                </div>
                                <!-- Conatct Info Item End -->
                            </div>
                            <!-- Contact Info Items List End -->
                        </div>
                        <!-- Contact Us Content Header End -->

                        <!-- Contact Social List Start -->
                        <div class="contact-social-list wow fadeInUp" data-wow-delay="0.8s">
                            <h3>Follow Me On Socials:</h3>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Social List Start -->
                    </div>
                    <!-- Contact Us Content End -->
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
                        <div class="contact-form">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator"
                                class="wow fadeInUp" data-wow-delay="0.2s" onsubmit="window.alert('Message sent! Chat with us on Live Chat')">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="Enter First Name *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Enter Last Name *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Enter Phone Number *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter Email Address *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Any Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">submit Message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
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
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Where We Located</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Your trusted financial guidance</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Providing reliable financial advice and strategic
                            consulting to help you make confident decisions and achieve long term success.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Herd\vestscapital\resources\views\home\contact.blade.php ENDPATH**/ ?>