<?php get_header(); ?>

<!-- Start Popup Mobile Menu  -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="menu-top">
            <div class="menu-header">
                <a class="logo" href="#">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/logo/logos-circle.png' ?>"
                        alt="Personal Portfolio">
                </a>
                <div class="close-button">
                    <button class="close-menu-activation close"><i data-feather="x"></i></button>
                </div>
            </div>
        </div>
        <div class="content">
            <?php wp_nav_menu(array( 'menu_class' => 'primary-menu nav nav-pills', 'container' => 'ul', 'add_li_class'  => 'nav-item')); ?>
            <!-- social sharea area -->
            <div class="social-share-style-1 mt--40">
                <span class="title">find with me</span>
                <ul class="social-share d-flex liststyle">
                    <li class="facebook"><a
                            href="<?php echo cot_get_theme_option('cot_facebook_url'); ?>"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-facebook">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg></a>
                    </li>
                    <li class="twitter"><a
                            href="<?php echo cot_get_theme_option('cot_twitter_url'); ?>"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-twitter">

                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                </path>


                            </svg></a>
                    </li>
                    <li class="linkedin"><a
                            href="<?php echo cot_get_theme_option('cot_linkedin_url'); ?>"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-linkedin">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                </path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg></a>
                    </li>
                    <li class="git-hub"><a
                            href="<?php echo cot_get_theme_option('cot_github_url'); ?>"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-git-hub">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                </path>
                            </svg></a>
                    </li>
                </ul>
            </div>
            <!-- end -->
        </div>
    </div>
</div>
<!-- End Popup Mobile Menu  -->




<main class="main-page-wrapper">

    <!-- Start Slider Area -->
    <div id="home" class="rn-slider-area">
        <div class="slide slider-style-1">
            <div class="container">
                <div class="row row--30 align-items-center">
                    <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                        <div class="content">
                            <div class="inner">
                                <span class="subtitle">Welcome to my world</span>
                                <h1 class="title">Hi, I’m <span><?php echo cot_get_theme_option('cot_contact_name'); ?></span><br>
                                    <span class="header-caption" id="page-top">
                                        <!-- type headline start-->
                                        <span class="cd-headline clip is-full-width">
                                            <span>a </span>
                                            <!-- ROTATING TEXT -->
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible">Developer.</b>
                                                <b class="is-hidden">Professional Coder.</b>
                                                <b class="is-hidden">Developer.</b>
                                            </span>
                                        </span>
                                        <!-- type headline end -->
                                    </span>
                                </h1>

                                <div>
                                    <p class="description">I use animation as a third dimension by which to simplify
                                        experiences and kuiding thro each and every interaction. I’m not adding
                                        motion
                                        just to spruce things up, but doing it in ways that.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                    <div class="social-share-inner-left">
                                        <span class="title">find with me</span>
                                        <ul class="social-share d-flex liststyle">
                                            <li class="facebook"><a
                                                    href="<?php echo cot_get_theme_option('cot_facebook_url'); ?>"><i
                                                        data-feather="facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a
                                                    href="<?php echo cot_get_theme_option('cot_twitter_url'); ?>"><i
                                                        data-feather="twitter"></i></a>
                                            </li>
                                            <li class="linkedin"><a
                                                    href="<?php echo cot_get_theme_option('cot_linkedin_url'); ?>"><i
                                                        data-feather="linkedin"></i></a>
                                            </li>
                                            <li class="github"><a
                                                    href="<?php echo cot_get_theme_option('cot_github_url'); ?>"><i
                                                        data-feather="github"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="order-1 order-lg-2 col-lg-5">
                        <div class="thumbnail">
                            <div class="inner">
                                <img src="<?php echo wp_get_attachment_image_src(cot_get_theme_option('contact_img1'))[0]; ?>"
                                    alt="Personal Portfolio Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start Service Area -->
    <div class="rn-service-area rn-section-gap section-separator" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"
                        data-aos-once="true">
                        <span class="subtitle">Features</span>
                        <h2 class="title">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt_md--10 mt_sm--10">

                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="menu"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Business Stratagy</a></h4>
                                <p class="description">I throw myself down among the tall grass by the stream as I
                                    lie close to the earth.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->
                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="book-open"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">App Development</a></h4>
                                <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                    a handful of model sentence.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->
                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="tv"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">App Development</a></h4>
                                <p class="description">I throw myself down among the tall grass by the stream as I
                                    lie close to the earth.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->
                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="twitch"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Mobile App</a></h4>
                                <p class="description">There are many variations of passages of Lorem Ipsum
                                    available, but the majority.
                                </p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->
                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="wifi"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">CEO Marketing</a></h4>
                                <p class="description">always free from repetition,
                                    injected humour, or non-characteristic words etc.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->
                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <i data-feather="slack"></i>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#">Personal Portfolio April</a></h4>
                                <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                    a handful of model sentence.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->

            </div>
        </div>
    </div>
    <!-- End Service Area  -->

    <!-- Start Portfolio Area -->
    <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                        class="section-title text-center">
                        <span class="subtitle">Visit my portfolio and keep your feedback</span>
                        <h2 class="title">My Portfolio</h2>
                    </div>
                </div>
            </div>

            <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/portfolio/portfolio-01.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Development</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            600</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">The services provide for design <i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/portfolio/portfolio-02.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Application</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            750</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                        maintain<i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/portfolio/portfolio-03.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Photoshop</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            630</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Logo design creativity & Application
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/portfolio/portfolio-04.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Figma</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            360</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Mobile app landing design &
                                        Services<i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/portfolio/portfolio-05.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Web Design</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            280</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Design for tecnology & services<i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/portfolio/portfolio-06.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Web Design</a>
                                    </div>
                                    <div class="meta">
                                        <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            690</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">App for tecnology & services<i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->
            </div>
        </div>
    </div>
    <!-- End portfolio Area -->

    <!-- Start News Area -->
    <div class="rn-blog-area rn-section-gap section-separator" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true"
                        class="section-title text-center">
                        <span class="subtitle">Visit my blog and keep your feedback</span>
                        <h2 class="title">My Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                <!-- Start Single blog -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                    class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/blog/blog-01.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Canada</a>
                                    </div>
                                    <div class="meta">
                                        <span><i class="feather-clock"></i> 2 min read</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">T-shirt design is the part of design
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single blog -->

                <!-- Start Single blog -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true"
                    class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/blog/blog-02.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Development</a>
                                    </div>
                                    <div class="meta">
                                        <span><i class="feather-clock"></i> 2 hour read</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">The services provide for design <i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single blog -->

                <!-- Start Single blog -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" data-aos-once="true"
                    class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/blog/blog-03.jpg" alt="Personal Portfolio Images">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Application</a>
                                    </div>
                                    <div class="meta">
                                        <span><i class="feather-clock"></i> 5 min read</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                        maintain<i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single blog -->

            </div>
        </div>
    </div>
    <!-- ENd Mews Area -->

    <!-- Start Contact section -->
    <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">Contact</span>
                        <h2 class="title">Contact With Me</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div class="col-lg-5">
                    <div class="contact-about-area">
                        <div class="thumbnail">
                            <img src="<?php echo wp_get_attachment_image_src(cot_get_theme_option('contact_img2'))[0]; ?>"
                                alt="contact-img">
                        </div>
                        <div class="title-area">
                            <h4 class="title"><?php echo cot_get_theme_option('cot_contact_name') ?>
                            </h4>
                        </div>
                        <div class="description">
                            <p>I am available for freelance work. Connect with me via and call in to my account.
                            </p>
                            <span class="phone">Phone: <a
                                    href="tel:<?php echo cot_get_theme_option('cot_contact_telephone')  ?>"><?php echo cot_get_theme_option('cot_contact_telephone')  ?></a></span>
                            <span class="mail">Email: <a
                                    href="mailto:<?php echo cot_get_theme_option('cot_contact_email')  ?>"><?php echo cot_get_theme_option('cot_contact_email')  ?></a></span>
                        </div>
                        <div class="social-area">
                            <div class="name">FIND WITH ME</div>
                            <div class="social-icone">
                                <a
                                    href="<?php echo cot_get_theme_option('cot_facebook_url'); ?>"><i
                                        data-feather="facebook"></i></a>
                                <a
                                    href="<?php echo cot_get_theme_option('cot_linkedin_url'); ?>"><i
                                        data-feather="linkedin"></i></a>
                                <a
                                    href="<?php echo cot_get_theme_option('cot_twitter_url'); ?>"><i
                                        data-feather="twitter"></i></a>
                                <a
                                    href="<?php echo cot_get_theme_option('cot_github_url'); ?>"><i
                                        data-feather="github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div id="success_message" class="alert alert-success" style="display: none;"></div>
                        <div id="error_message" class="alert alert-danger" style="display: none;"></div>
                        <div class="introduce">

                            <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name</label>
                                        <input class="form-control form-control-lg" name="contact-name"
                                            id="contact-name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-email">Email</label>
                                        <input class="form-control form-control-sm" id="contact-email"
                                            name="contact-email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">subject</label>
                                        <input class="form-control form-control-sm" id="subject" name="subject"
                                            type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="contact-message">Your Message</label>
                                        <textarea name="contact-message" id="contact-message" cols="30"
                                            rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" type="submit" id="submit" class="rn-btn">
                                        <span>SEND MESSAGE</span>
                                        <i data-feather="arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contuct section -->

    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->



</main>

<?php get_footer();
