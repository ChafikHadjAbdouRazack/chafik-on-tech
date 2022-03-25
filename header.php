<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?>
    </title>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo get_template_directory_uri().'/assets/images/favicon.ico' ?>">
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <!-- CSS
    ============================================ -->
    <?php wp_head(); ?>
</head>

<body class="template-color-1 spybody white-version" data-spy="scroll" data-target=".navbar-example2" data-offset="150">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="/">
                            <?php bloginfo('name') ?>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <?php wp_nav_menu(array( 'menu_class' => 'primary-menu nav nav-pills', 'container' => 'ul', 'add_li_class'  => 'nav-item',"link_class" => "nav-link smoth-animation active")); ?>

                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->
                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
