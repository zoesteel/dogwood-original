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
	<link rel="stylesheet" id="slider-css" href="<?php echo get_template_directory_uri(); ?>/css/front-page-slides.css?ver=1.1" type="text/css" media="all">
<?php endif; ?>

<!-- Include responsiveslider in Single-Adoptable -->
<?php if ( is_singular ( 'adoptable' ) ) : ?>
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
		<div class="container">
			<div class="row">
		
			<!-- <div class="site-branding"> -->
				<div class="col-12 col-sm-6">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo("template_url"); ?>/images/dogwood-logo.svg" alt="Dogwood Rescue Society Logo" class="logo"></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo("template_url"); ?>/images/dogwood-logo.svg" alt="Dogwood Rescue Society Logo" class="logo"></a></p>
					<?php
					endif;

					 ?>
				</div><!-- end col-->
			 <!-- Icon Links to Social Media -->
			<div class="social-donate d-flex flex-column col-12 col-sm-6 align-items-center align-items-sm-end">
				<div class="social d-flex flex-row justify-content-between">
					<a href="https://www.facebook.com/dogwoodrescuesociety" target="_new">
						<span class="fa-stack fa-sm">
						  <i class="fas fa-circle fa-stack-2x"></i>
						  <i class="fab fa-facebook-f fa-stack-1x" style="color: white"></i>
						</span>
<!-- <img src="<?php bloginfo("template_url"); ?>/images/icons/fb.png" alt="Link to Dogwood Rescue on Facebook" class="fb"> --></a>
					<a href="https://www.instagram.com/dogwoodrescue" target="_new">
						<span class="fa-stack fa-sm">
						  <i class="fas fa-circle fa-stack-2x"></i>
						  <i class="fab fa-instagram fa-stack-1x" style="color: white"></i>
						</span>
					</a>
					<a href="https://twitter.com/dogwoodrescue" target="_new">
						<span class="fa-stack fa-sm">
						  <i class="fas fa-circle fa-stack-2x"></i>
						  <i class="fab fa-twitter fa-stack-1x" style="color: white"></i>
						</span></a>
			
					
				</div><!-- end social -->
				<a href="<?php echo site_url(); ?>#give-form-100-wrap"><!-- <img src="<?php bloginfo("template_url"); ?>/images/donate.jpg" alt="Link to donation section" class="donate"> --><button class="btn donate-btn justify-self-end">Donate</button></a>
			</div>
		<!-- </div> --><!-- .site-branding -->

			</div><!-- end row -->
		</div><!-- end container -->
		<div class="container-fluid">
			<!-- <div class="container"> -->
				<div class="row">

					<nav id="site-navigation" class="main-navigation col-12" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dogwood' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'desktop-menu'   ) ); ?>
					</nav><!-- #site-navigation -->

					<!-- Responsive Nav -->
					<nav class="responsive-navigation" role="navigation">
						<button class="responsive-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dogwood' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu',  'menu_class'  => 'mobile-menu' ) ); ?>
					</nav>
				</div><!-- end row -->
			<!-- </div> -->
		</div><!-- end container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
