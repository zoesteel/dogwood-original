<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dogwood
 */

get_header(); ?>


<!-- <img src="<?php bloginfo('template_directory'); ?>/images/headings/happytails-heading-1.jpg" class='heading-image' alt="Happy Tails Header"/> -->

<?php  
$heading_img = get_field('heading_image'); 
$heading_title = get_field('heading_title'); 

	
?>
<div class="heading-banner">

	<img src="<?php echo $heading_img; ?>" class="heading-img" />
	<div class="container-fluid heading-title-bg">
		<div class="container">
			<div class="row">
				<h1 class="col-12 heading-title">Happy Tails</h1>
			</div>
		</div>
	</div>
</div>
<div class="container"><!-- 
	<h1 class="happytails-title">Happy Tails</h1> -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-12">		

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- end col-->
			</div><!--row -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- container -->

<?php
get_footer();
