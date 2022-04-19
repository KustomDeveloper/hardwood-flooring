<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.png">

    <!-- Analytics goes here -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body id="site" <?php body_class(); ?>>
    <div class="head-wrapper">
        <div class="container-fluid">
            <div class="topbar">
                <div class="top-inner">
                    <p class="business-hours">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/clock-icon.png"/> Mon - Fri 9:00 - 5pm cst</p>
                    <p class="company-email">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/envelope-icon.png" /> <?php echo get_theme_mod('bus_info_email_address'); ?> </p>
                    <p class="top-phone">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/phone-icon-top.png" /> Get A Free Consultation Call Now:  <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a></p>
                    <p class="top-social">
                        <a href="<?php echo get_theme_mod('bus_info_facebook'); ?>"><img class="top-fb" src="<?php bloginfo("stylesheet_directory"); ?>/img/top-fb.png" /></a>
                        <a href="<?php echo get_theme_mod('bus_info_twitter'); ?>"><img class="top-tw" src="<?php bloginfo("stylesheet_directory"); ?>/img/top-tw.png" /></a>
                        <a href="<?php echo get_theme_mod('bus_info_youtube'); ?>"><img class="top-yt" src="<?php bloginfo("stylesheet_directory"); ?>/img/top-yt.png" /></a>
                        <a href="<?php echo get_theme_mod('bus_info_linkedin'); ?>"><img class="top-li" src="<?php bloginfo("stylesheet_directory"); ?>/img/top-li.png" /></a>
                        <a href="<?php echo get_theme_mod('bus_info_pinterest'); ?>"><img class="top-pi" src="<?php bloginfo("stylesheet_directory"); ?>/img/top-pi.png" /></a>
                    </p>
                </div>
            </div>

            <div class="row flex-container logo-row">
                <div class="logo-container">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/hardwood-floor-logo.png" />
                    </a>
                </div><!-- .logo-container -->

                <div class="main-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
                </div><!--.main-nav-->
                <div class="mobile-menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/mobile-menu.png"></div>
                <div class="close-menu"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/close-menu.png"></div>
                <div class="mobile-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
                </div><!--.main-nav-->

                <div class="nav-phone">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/small-phone-icon.png"/>
                    <p>CALL NOW: <br/><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a></p>
                </div>

            </div><!--.row-->
            
        </div><!--.container-fluid-->
    </div><!--.head-wrapper-->