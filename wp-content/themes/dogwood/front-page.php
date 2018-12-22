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
				<div class="col-12">



					<div class="front-pg-slider">
					  <div><img src="<?php echo get_template_directory_uri(); ?>/images/dogwood-home-slider.jpg" /></div>
					  <div>your content</div>
					  <div>your content</div>
					</div>
			
					<script>
					jQuery(document).ready(function($){
					  $('.front-pg-slider').slick({
					  	autoplay: true,
	  					autoplaySpeed: 2000,
	  					arrows: true
					  });
					});
					</script>

				</div><!-- end col-12 -->

			</div><!-- end row -->

				<?php
				// Display Size and Preference
				get_template_part( 'template-parts/content', 'call-to-actions' );

				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
				?>
			
		</div><!-- end container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
