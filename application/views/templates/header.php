<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?php echo isset($title) ? $title : ''; ?></title>

<!-- Fav Icon -->
<link rel="icon" href="<?php echo STATIC_URL; ?>/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="<?php echo STATIC_URL; ?>/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/flaticon.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/owl.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/animate.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/nice-select.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/imagebg.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/color.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo STATIC_URL; ?>/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="text pull-left"><p>Hurry! Grab your seat for Makeup Pro Course, <b style="color:red !important;">6 seats left!!</b></p></div>
                        <div class="location-box pull-right"><p><i class="flaticon-map-marker"></i>Sec-8, Rohini Delhi</p></div>
                    </div>
                </div>
            </div>
            <div class="auto-container">
                <!-- header-upper -->
                <div class="header-upper">
                    <div class="upper-inner">
                        <div class="mail-box info-box">
                            <div class="inner">
                                <i class="flaticon-email-1"></i>
                                <p>Email</p>
                                <a href="mailto:needhelp@info.com">needhelp@info.com</a>
                            </div>
                        </div>
                        <!-- <figure class="logo-box"><a href="index.html"><img src="<?php echo STATIC_URL; ?>/assets/images/logo-2.png" alt=""></a></figure> -->
                        <figure class="logo-box"><a href="index.html"><img src="<?php echo STATIC_URL; ?>/assets/images/apra-logo.png" alt=""></a></figure>
                        <div class="phone-box info-box">
                            <div class="inner">
                                <i class="flaticon-phone"></i>
                                <p>Phone</p>
                                <a href="tel:926668880000">+91 9898989898</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-lower -->
                <div class="header-lower">
                    <div class="outer-box">

                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="/">Home</a></li>
                                        <li class="dropdown"><a>APRA Makeups</a>
                                            <ul>
                                              <li>
                                                  <a href="<?php echo BASE_URL .'bridal-makeups'; ?>">Bridal Makeups</a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo BASE_URL .'occassion-makeups'; ?>">Occassion Makeups</a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo BASE_URL .'amazing-makeovers'; ?>">Amazing Makeovers</a>
                                              </li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo BASE_URL .'nail-extensions'; ?>">Nail Extensions</a></li>
                                        <li><a href="<?php echo BASE_URL .'jewellery-on-rent'; ?>">Jewellery On Rent</a></li>
                                        <li><a href="<?php echo BASE_URL .'salon'; ?>">Our Salon</a></li>
                                        <li><a href="<?php echo BASE_URL .'academy'; ?>">Our Academy</a></li>
                                        <li class="dropdown"><a>Courses</a>
                                            <ul>
                                              <li>
                                                  <a href="<?php echo BASE_URL .'self-makeup-course'; ?>">Self Makeup Course</a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo BASE_URL .'professional-makeup-course'; ?>">Professional Makeup Course</a>
                                              </li>
                                              <li>
                                                  <a href="<?php echo BASE_URL .'makeup-workshop'; ?>"> 3 Day Makeup Workshop</a>
                                              </li>
                                            </ul>
                                        </li>

                                        <li><a href="<?php echo BASE_URL .'book-online'; ?>">Book Online</a></li>
                                        <li><a href="<?php echo BASE_URL .'about'; ?>">About</a></li>
                                        <li><a href="<?php echo BASE_URL .'services'; ?>">Services</a></li>
                                        <li><a href="<?php echo BASE_URL .'brands'; ?>">Brand We Use</a></li>
                                        <li><a href="<?php echo BASE_URL .'makeup-packages'; ?>">Makeup Packages</a></li>
                                        <li><a href="<?php echo BASE_URL .'contact-us'; ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?php echo STATIC_URL; ?>/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-section style-two">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-style-one">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?php echo STATIC_URL; ?>/assets/images/resource/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box centred">
                            <span class="top-text" style="font-weight:600 !important;">APRA Makeover & Academy</span>
                            <h1>MAKEUP-SALON-ACADEMY</h1>
                            <!-- <p>Get the best haircut now only in <span>$20</span></p> -->
                            <div class="btn-box">
                                <span class="theme-btn-one">CALL NOW @ 98989898898</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item bg-left">
                    <!-- <div class="image-layer" style="background-image:url(<?php //echo STATIC_URL; ?>/assets/images/banner/banner-5.jpg)"></div> -->
                    <div class="image-layer" style="background-image:url(<?php echo STATIC_URL; ?>/assets/images/resource/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box centred">
                            <span class="top-text">APRA Makeover & Academy</span>
                            <h1>Creation of beauty is ART</h1>
                            <!-- <p>Get the best haircut now only in <span>$20</span></p> -->
                            <div class="btn-box">
                                <span class="theme-btn-one">CALL NOW @ 98989898898</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item bg-left">
                    <div class="image-layer" style="background-image:url(<?php echo STATIC_URL; ?>/assets/images/resource/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box centred">
                            <span class="top-text">APRA Makeover & Academy</span>
                            <h1>Your care is our concern</h1>
                            <!-- <p>Get the best haircut now only in <span>$20</span></p> -->
                            <div class="btn-box">
                              <span class="theme-btn-one">CALL NOW @ 98989898898</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->
