<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css"/>
    <!-- Theme color -->
    <link id="switcher" href="<?php echo get_template_directory_uri();?>/assets/css/theme-color/default.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div class="loader">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#header"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<?php
if (is_home()){
?>
    <!-- Start header section -->
    <header id="header">
        <div class="header-inner">
            <!-- Header image -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-bg.jpg" alt="img">
            <div class="header-overlay">
                <div class="header-content">
                    <!-- Start header content slider -->
                    <h2 class="header-slide">WE GENERATE
                        <span>MOST CREATIVE</span>
                        <span>MOST Design</span>
                        <span>MOST Valuable</span>
                        IDEA</h2>
                    <!-- End header content slider -->
                    <!-- Header btn area -->
                    <div class="header-btn-area">
                        <a class="knowmore-btn" href="#">KNOW MORE</a>
                        <a class="download-btn" href="#">DOWNLOAD Theme</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- End header section -->
<?php
}
?>


<!-- Start menu section -->
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="navbar-brand logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.jpg" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">

                    <?php
                    if (is_home()) {
                    ?>
                    <li class="active"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#team">TEAM</a></li>
                    <li><a href="#service">SERVICE</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#pricing-table">PRICE </a></li>
                    <li><a href="#from-blog">BLOG </a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <?php
                    } elseif (is_404()) {
                    ?>
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="active"><a href="404.html">404 </a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="active"><a href="<?php echo home_url(); ?>/blog-archive">BLOG </a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
            <div class="search-area">
                <?php get_search_form(); ?>

            </div>
        </div>
    </nav>
</section>
<!-- End menu section -->
