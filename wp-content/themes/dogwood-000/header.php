<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dogwood
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Include responsiveslider in Front Page only-->
<?php if ( is_front_page() ) : ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
	<link rel="stylesheet" id="slider-css" href="<?php echo get_template_directory_uri(); ?>/css/front-page-slides.css?ver=1.1" type="text/css" media="all">
<?php endif; ?>

<!-- Include responsiveslider in Single-Adoptable -->
<?php if ( is_singular ( 'adoptable' ) ) : ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
	<link rel="stylesheet" id="slider-css" href="<?php echo get_template_directory_uri(); ?>/css/adoptable-slides.css?ver=1.1" type="text/css" media="all">
<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'dogwood' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

	
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="logo" class="logo"></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="logo" class="logo"></a></p>
			<?php
			endif;

			 ?>
			 <!-- Icon Links to Social Media -->
			<div class="social">
				<a href="https://www.facebook.com/dogwoodrescuesociety" target="_new"><img src="<?php bloginfo("template_url"); ?>/images/icons/fb.png" alt="Dogwood Rescue on Facebook" class="fb"></a>
				<a href="https://www.instagram.com/dogwoodrescue" target="_new"><img src="<?php bloginfo("template_url"); ?>/images/icons/ig.png" alt="Dogwood Rescue on Instagram" class="insta"></a>
				<a href="https://twitter.com/dogwoodrescue" target="_new"><img src="<?php bloginfo("template_url"); ?>/images/icons/twitter.png" alt="Dogwood Rescue on Twitter" class="twitter"></a>
			</div>
			<a href="donate.php"><img src="<?php bloginfo("template_url"); ?>/images/donate.jpg" alt="donate" class="donate"></a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dogwood' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
