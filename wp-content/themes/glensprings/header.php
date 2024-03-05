<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>glensprings</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=<?php bloginfo( 'charset' ); ?>" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />

    <!-- site fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <link href="<?php echo get_template_directory_uri(); ?>/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo get_template_directory_uri(); ?>/css/coloring.css" rel="stylesheet" type="text/css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('onepage dark-scheme'); ?> >
<div class="fixbg">
    <video loop autoplay muted >
    <source src="<?php echo get_template_directory_uri(); ?>/video/video.mp4" type="video/mp4">
    </video>
    </div>
    <div id="wrapper">
        <!-- header begin -->
        <header class="header-v2 header-full transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="<?php echo get_site_url(); ?>">
                                            <img src="<?=get_field('logo',10); ?>" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col">
                                <!-- <div class="menu_side_area">
                                    <span id="de-menu-reveal">
                                        <span class="lt"></span>
                                        <span class="lm"></span>
                                        <span class="lb"></span>
                                    </span>
                                </div> -->

                                <nav class="navBar">

                                <?php wp_nav_menu( array('menu' => 'Header Menu', 'container' => '', 'items_wrap' => '<ul class="d-flex">%3$s</ul>' )); ?>

                                    <!-- <ul class="d-flex">
                                        <li><a href="#">INDUSTRIES <i class="fa-solid fa-angle-down"></i></a>
                                            <ul class="subMenu">
                                                <li><a href="<?php //get_site_url(); ?>/agriculture">Agriculture</a></li>
                                                <li><a href="#">Environmental Management</a></li>
                                                <li><a href="#">Media & Entertainment</a></li>
                                                <li><a href="#">Real Estate</a></li>
                                                <li><a href="#">Agriculture</a></li>
                                                <li><a href="#">Environmental Management</a></li>
                                                <li><a href="#">Media & Entertainment</a></li>
                                                <li><a href="#">Real Estate</a></li>
                                                <li><a href="#">Agriculture</a></li>
                                                <li><a href="#">Environmental Management</a></li>
                                                <li><a href="#">Media & Entertainment</a></li>
                                                <li><a href="#">Real Estate</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">SOLUTIONS <i class="fa-solid fa-angle-down"></i></a></li>
                                        <li><a href="<?php //get_site_url(); ?>/services">Services <i class="fa-solid fa-angle-down"></i></a></li> -->
                                        <!-- <li><a href="#">On-Demand Developers</a></li>
                                        <li><a href="#">Portfolio <i class="fa-solid fa-angle-down"></i></a></li> -->
                                        <!-- <li class="subMenuSmall"><a href="#">Company <i class="fa-solid fa-angle-down"></i></a>
                                            <ul class="subMenu">
                                                <li><a href="about.php">About us</a></li>
                                                <li><a href="awards.php">Awards</a></li>
                                                <li><a href="channel-partner-program.php">Channel Partner Program</a></li>
                                                <li><a href="events.php">events</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="blogs.php">Blog</a></li> -->
                                        <!-- <li><a href="#">Support</a></li>
                                        <li><a href="<?php //get_site_url(); ?>/about-us">About us</a></li>
                                        <li><a href="<?php //get_site_url(); ?>/contact-us">Contact</a></li>
                                    </ul> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- <div id="de-menu-container">
            <div class="mainmenu-v2-wrap">
                <ul id="mainmenu-v2">
                    <li><a class="active" href="#top">Home<span></span></a></li>
                    <li><a href="#section-about">About me<span></span></a></li>
                    <li><a href="#section-services">What I Do<span></span></a></li>
                    <li><a href="#section-portfolio">Portfolio<span></span></a></li>
                    <li><a href="#section-resume">My Resume<span></span></a></li>
                    <li><a href="#section-blog">Blog<span></span></a></li>
                    <li><a href="#section-contact">Contact Me<span></span></a></li>
                </ul>
            </div>
        </div> -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <div class="float-text show-on-scroll">
                <span><a href="#">Scroll to top</a></span>
            </div>
            <div class="scrollbar-v show-on-scroll"></div>            

            <!-- load external content begin -->
            <div id="de_modal">
                <button class="button-close"></button>
                <div class="d-modal-loader"></div>
            </div>
             <!-- load external content close -->