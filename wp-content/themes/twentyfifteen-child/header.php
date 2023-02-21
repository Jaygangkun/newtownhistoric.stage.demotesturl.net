<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />
	<link media="all" href="<?php echo get_stylesheet_directory_uri();?>/css/font.css" rel="stylesheet">
    <script src="https://use.typekit.net/ldv4nja.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!--[if IE]><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/ie.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
        <div id="header">
            <?php if ( is_active_sidebar( 'header_alert' ) ) : ?>
                <div class="alertBar">
                    <?php dynamic_sidebar( 'header_alert' ); ?>
                </div>
            <?php endif; ?>
        	<div class="topbar">
            	<div class="container">
                	<div class="search">
                    	<form action="<?php bloginfo('url'); ?>" method="get">
                        	<fieldset>
                            	<input type="text" placeholder="" name="s">
                                <input type="submit" value="Search">
                            </fieldset>
                        </form>
                    </div>
                    <nav class="top-nav">
                    	<?php wp_nav_menu(array('menu'=>'top_nav', 'container'=>false)); ?>
                    </nav>
                </div>
            </div>
            <div class="header-content">
                <div class="container">
                    <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png" alt=""></a></div>
                    <nav id="nav">
                        <?php wp_nav_menu(array('menu'=>'Header Navigation', 'container'=>false)); ?>
                    </nav>
                </div>
             </div>
        </div>                                              