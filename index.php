<?php get_header(); ?>

<!-- Start Popup Mobile Menu  -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="menu-top">
            <div class="menu-header">
                <a class="logo" href="/">
                    <?php bloginfo('name') ?>
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
                                                <b class="is-visible">Software Developer.</b>
                                                <b class="is-hidden">Network Engenier.</b>
                                                <b class="is-hidden">Problem Solver</b>
                                                <b class="is-hidden">Hacker by Night</b>
                                            </span>
                                        </span>
                                        <!-- type headline end -->
                                    </span>
                                </h1>

                                <div>
                                    <p class="description"><?php echo cot_get_theme_option('cot_contact_description'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                    <div class="social-share-inner-left">
                                        <span class="title">find with me</span>
                                        <ul class="social-share d-flex liststyle">
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
                                <img src="<?php echo wp_get_attachment_image_src(cot_get_theme_option('contact_img1'),'full')[0]; ?>"
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
                <?php
                     $args = array(
                         'post_type'=>array('skills'),
                         'post_status'=>array('publish')
                     );
                     $post_query = new WP_Query($args);
                    if ($post_query->have_posts()): ?>
                <?php while ($post_query->have_posts()): ?>
                <?php $post_query->the_post() ?>
                <!-- Start Single Service -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-service">
                        <div class="inner">
                            <div class="icon">
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#"><?php the_title() ?></a></h4>
                                <p class="description"><?php the_content() ?>
                                </p>
                                <a class="read-more-button"
                                    href="<?php the_permalink() ?>"><i
                                        class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link"
                            href="<?php the_permalink() ?>"></a>
                    </div>
                </div>
                <!-- End SIngle Service -->
                <?php endwhile?>
                <?php endif ?>

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
                <?php
                     $args = array(
                         'post_type'=>array('portfolios'),
                         'post_status'=>array('publish')
                     );
                     $post_query = new WP_Query($args);
                    if ($post_query->have_posts()): ?>
                <?php while ($post_query->have_posts()): ?>
                <?php $post_query->the_post() ?>
                <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true"
                    class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)"><?php $categories = wp_get_post_terms(get_the_ID(), 'categories');
                                        foreach ($categories as $value) {
                                            echo get_category($value)->name;
                                        }
                                        ?>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)"><?php the_title() ?> <i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif ;?>
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

                <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                <?php the_post() ?>
                <!-- Start Single blog -->
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true"
                    class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rn-blog" data-toggle="modal" data-target="#exampleModalCenters">
                        <div class="inner">
                            <div class="thumbnail">

                                <a href="javascript:void(0)">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="#"> <?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?>
                                        </a>
                                    </div>
                                    <div class="meta">
                                        <span><i class="feather-clock"></i><?php the_date() ?></span>
                                    </div>
                                </div>
                                <h4 class="title"><a
                                        href="<?php the_permalink() ?>"><?php the_title() ?>
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- End Single blog -->
                <?php endif ;?>
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
                            <img src="<?php echo wp_get_attachment_image_src(cot_get_theme_option('contact_img2'),'full')[0]; ?>"
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
                                    <div class="g-recaptcha"
                                        data-sitekey="<?php echo RECAPTCHA_SITE_KEY ?>">
                                    </div>
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
