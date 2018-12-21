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

<?php
	if( have_rows('slides')){

		echo "<ul class='rslides' id='front-page-slides'>";

	    while( have_rows('slides')){
	        the_row();

	        if(get_sub_field('slide')) {
	        	$slide = get_sub_field('slide');
	        	$link = get_sub_field('link');
				// $caption = get_sub_field('caption');

	        	if($link != '')
	        		echo "<a href='$link'>";
	            echo "<li class='slider-image'>";
	            echo "<img src='$slide'/>";
	            // if($caption !='')
	            // echo "<p class='caption'></p>";
	            echo "</li>";
	            if($link != '')
	           		echo "</a>";
	        }
    	}
    	echo "</ul>";
   	}
?>

<!-- Start slideshow -->
<script>
  $(function() {
    $("#front-page-slides").responsiveSlides({
    	auto: false,
    	pager: true,
    	nav: true,
    	speed: 500
    });
  });
</script>

<?php
// Display Size and Preference
get_template_part( 'template-parts/content', 'call-to-actions' );

while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'page' );
endwhile; // End of the loop.
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
