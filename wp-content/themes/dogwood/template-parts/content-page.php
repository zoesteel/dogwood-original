<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dogwood
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header --><!-- .entry-header -->

	<div class="entry-content col-12">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dogwood' ),
				'after'  => '</div>',
			) );
		?>

		<?php 
		if (is_page('Contact Us')){
			echo do_shortcode('[gravityform id= 1 title=true description=true]'); 
		} else if( is_page('Foster Form')){
			echo do_shortcode('[gravityform id= 2 title=true description=true]'); 
		}else if( is_page('Volunteer Form')){
			echo do_shortcode('[gravityform id= 3 title=true description=true]'); 
		}else if( is_page('Adoption Form')){
			echo do_shortcode('[gravityform id= 4 title=true description=true]'); 
		}

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'dogwood' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
