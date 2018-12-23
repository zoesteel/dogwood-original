<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dogwood
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-12 front-pg-slider">
					<!-- <div class=""> -->
					  <div><img src="<?php echo get_template_directory_uri(); ?>/images/dogwood-home-slider.jpg" /></div>
					  <div>your content</div>
					  <div>your content</div>
					<!-- </div> -->
				</div><!-- end col-12 -->

			</div><!-- end row -->
			<div class="row call-to-actions">
				<?php
				// Display Size and Preference
				get_template_part( 'template-parts/content', 'call-to-actions' );
				?>
			</div>
			<div class="row">
				<div class="col-12" 
					<div class="d-flex justify-content-center" style="width: 100%">
						<?php echo do_shortcode('[give_form id="100"]') ;?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php 
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; // End of the loop.
					?>
				</div>
			</div>				
		</div><!-- end container -->
	</main><!-- #main -->
</div><!-- #primary -->

<script>
jQuery(document).ready(function($){
  $('.front-pg-slider').slick({
  	autoplay: true,
		autoplaySpeed: 2000,
		arrows: true
  });
});
</script>
<?php
get_footer();
