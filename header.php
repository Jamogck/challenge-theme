<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package challenge-conference
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Evangelical Free Church of America">
<meta name="description" content="Challenge is a catalytic environment challenging students to live on mission with Jesus everyday, everywhere and with everyone.">

<meta property="og:title" content="Challenge" />
<meta property="og:site_name" content="Challenge"/>
<meta property="og:url" content="https://www.experiencechallenge.org" />
<meta property="og:description" content="Challenge is a catalytic environment challenging students to live on mission with Jesus everyday, everywhere and with everyone." />
<meta property="og:image" content="https://www.experiencechallenge.org/wp-content/uploads/2016/10/Challenge-theme_og.jpg" />

<!-- Twitter Data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@efcaChallenge">
<meta name="twitter:title" content="Challenge">
<meta name="twitter:description" content="Challenge is a catalytic environment challenging students to live on mission with Jesus everyday, everywhere and with everyone.">
<meta name="twitter:image:src" content="https://www.experiencechallenge.org/wp-content/uploads/2016/10/Challenge-theme_og.jpg">

<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
<!-- Place favicon.ico in the root directory -->

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<script src="//use.typekit.net/eai6zsz.js"></script>
<script type="text/javascript" src="//use.typekit.net/zpw3lal.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

   <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
    <div class="modal-screen"></div>
    <div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'challenge-conference-theme' ); ?></a>
        <div class="slide-out">
            <nav class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                <div class="social-links">
                    <ul class="group">
                        <li><a href="http://twitter.com/EFCAchallenge">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="http://instagram.com/EFCAchallenge">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://vimeo.com/album/3630384">
                            <i class="fa fa-vimeo-square"></i>
                            </a>
                        </li>
                        <li><a href="http://fb.com/EFCAchallenge">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="outer-wrap">
        <header id="masthead" class="site-header" role="banner">
            <div class="section-inner group clear">
                <div class="site-branding">
                    <a title="Return to the homepage" href="<?php bloginfo('url'); ?>"class="logo">
                    </a>
                </div>
                <div class="section-right">
                    <!-- <a class="primary-cta" href="http://experience.challengeconference.org/" title="experience">Experience</a> -->
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                            <div class="social-links">
                                <ul class="group">
                                    <li><a href="http://twitter.com/EFCAchallenge">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="http://instagram.com/EFCAchallenge">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://vimeo.com/album/3630384">
                                        <i class="fa fa-vimeo-square"></i>
                                        </a>
                                    </li>
                                    <li><a href="http://fb.com/EFCAchallenge">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    <div class="nav-trigger">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

	<div id="content" class="site-content">
