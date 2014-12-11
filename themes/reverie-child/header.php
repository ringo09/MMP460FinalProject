<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?> ><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width" />
    <!-- Favicon and Feed -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
    <!--  iPhone Web App Home Screen Icon -->
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />
    <!-- Enable Startup Image for iOS Home Screen Web App -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />
    <!-- Startup Image iPad Landscape (748x1024) -->
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
    <!-- Startup Image iPad Portrait (768x1004) -->
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
    <!-- Startup Image iPhone (320x460) -->
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased'); ?>>

<header>
    <div class="row">
    <!-- header.php-->
        <div class="large-4 medium-12 columns logo">
            <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/reverie-child/img/logo.png" alt="logo"/></a>
        </div>
        <div class="large-8 columns first-nav">
            <div class="large-6 columns bolgNews">
                <?php
                    $nav01 = array(
                    'theme_location' => 'nav01',
                    'after' => '<span>|</span>'
                    );
                ?>
                <?php wp_nav_menu( $nav01 ); ?>
            </div>
            <div class="large-6 columns">
                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <div>
                        <input type="text" size="put_a_size_here" name="s" id="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="large-8 columns secound-nav">
            <div class="large-9 columns about">
                <?php
                    $nav02 = array(
                    'theme_location' => 'nav02',
                    'after' => '<span>||</span>'
                    );
                ?>
                <?php wp_nav_menu( $nav02 ); ?>
            </div>
            <div class="large-3 columns">
                <?php
                    $donation = array(
                    'theme_location' => 'donation',
                    );
                ?>
                <?php wp_nav_menu( $donation ); ?>
            </div>
        </div>
    </div>
</header>

<!-- Start the main container -->
<div class="content">