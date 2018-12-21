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


<?php
	if( have_rows('heading_image')){
				while( have_rows('heading_image')){
	        the_row();
	        $image = get_sub_field('image');
		  	}
	
	   	echo "<img class='heading-image' src='" . $image . "'/>";
   	}
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="entry-content col-12">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );
						if(is_page('about-us') || is_page('volunteer'))
							get_template_part( 'template-parts/content', 'call-to-actions' );
						if(is_page('education-resources'))
							get_template_part( 'template-parts/content', 'education-resources');
					endwhile; // End of the loop.
					?>
				</div><!-- end col-->
			</div><!-- end row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
