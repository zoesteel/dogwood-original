<?php
/**
 * The template for displaying all Adoptable pages.
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

		<header>
			<h1>Adoptables</h1>
		</header>

<!-- Display Icon Legend -->
<div class="icon-legend">
    <ul class="size-icons">
        <li><span>Small</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/small-dog-text.png" class="adoptable-size"/></div>
        </li>
        <li><span>Medium</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/med-dog-text.png" class="adoptable-size"/></div>
        </li>
        <li><span>Large</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/large-dog-text.png" class="adoptable-size"/></div>
        </li>
        <li><span>X-Large</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/xl-dog-text.png" class="adoptable-size"/></div>
        </li>
    </ul>
    <ul class="preference-icons">
        <li><span>Prefers home with no cats</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/no-cats.png" class="adoptable-preference"/></div>
        </li>
        <li><span>Prefers home with no dogs</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/no-dogs.png" class="adoptable-preference"/></div>
        </li>
        <li><span>Prefers home with no children</span>
            <div class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/no-kids.png" class="adoptable-preference"/></div>
        </li>
    </ul>
    <div class="clear"></div>
</div>

<?php

        $args = array(
            'post_type' => 'adoptable',
            'posts_per_page' => -1,
        );

        $adoptable = new WP_Query( $args );

        // Loop Starts
        if($adoptable -> have_posts() ){
            while($adoptable -> have_posts() ) {
                $adoptable -> the_post();

                echo "<div class='adoptable'>";
                echo "<a href = '";
                the_permalink();
                echo "'><h2>";
                the_title();
                echo "</h2></a>";
                the_post_thumbnail('medium');
                echo "</div>";

                // Display Size and Preference
                get_template_part( 'template-parts/adoptable', 'size-and-preference' );

            }// end while loop
            wp_reset_postdata();
        } // end if
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
