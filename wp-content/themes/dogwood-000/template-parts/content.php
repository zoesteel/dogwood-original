<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dogwood
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
							echo '<h1><a href="';
							the_permalink();
							echo '">';
							the_title();
							echo '</a></h1>';
				// <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!-- <?php dogwood_posted_on(); ?> -->
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dogwood' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">', '"</span>', false),
				the_post_thumbnail( 'large' )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dogwood' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php dogwood_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
