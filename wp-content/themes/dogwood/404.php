<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Page Not Found', 'dogwood' ); ?></h1>
			
			
					<h2 style="text-align:center;"><?php _e( 'Sorry, we couldn\'t find that page!', 'dogwood' ); ?></h2>
					<p style="text-align:center;"><?php _e( 'Would you like to try a search?', 'dogwood' ); ?></p>
				<div style="text-align: center;">		
					<?php get_search_form(); ?>
				</div>
		

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>