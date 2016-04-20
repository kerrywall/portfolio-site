<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package kw
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main content">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h3 class="site-deck"><?php bloginfo('description'); ?></h3>

			<div class="menu">
				<?php if (is_home() ) : ?>
				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>
				<?php endif ?>

				<div class="social">
					<a href="http://twitter.com/kerrywall" target="_blank"><span class="fa fa-twitter"></span></a>
					<a href="http://github.com/kerrywall" target="_blank"><span class="fa fa-github"></span></a>
					<a href="http://ca.linkedin.com/pub/kerry-wall/4/430/1bb" target="_blank"><span class="fa fa-linkedin"></span></a>
					<a href="https://plus.google.com/+KerryWall" target="_blank"><span class="fa fa-google-plus"></span></a>
				</div>
			</div>
		</div>

		<div class="fixed">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h3 class="site-deck"><?php bloginfo('description'); ?></h3>

			<div class="menu">
				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<div class="social">
						<a href="http://twitter.com/kerrywall" target="_blank"><span class="fa fa-twitter"></span></a>
						<a href="http://github.com/kerrywall" target="_blank"><span class="fa fa-github"></span></a>
						<a href="http://ca.linkedin.com/pub/kerry-wall/4/430/1bb" target="_blank"><span class="fa fa-linkedin"></span></a>
						<a href="https://plus.google.com/+KerryWall" target="_blank"><span class="fa fa-google-plus"></span></a>
					</div>
				</nav>

				
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">