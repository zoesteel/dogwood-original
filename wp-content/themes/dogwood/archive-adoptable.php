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

<div class="entry-content">
		<header>
			<h1>Adoptables</h1>
		</header>

<!-- Icons Legend -->
<div class="icons-legend">
    <h3>Icons Legend</h3>

    <div>
    <table>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/small-dog-text.png" class="adoptable-size"/></td>
            <td>1-10kg (25 lbs)</td>
        </tr>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/med-dog-text.png" class="adoptable-size"/></td>
            <td>11-25kg (25-55 lbs)</td>
        </tr>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/large-dog-text.png" class="adoptable-size"/></td>
            <td>25-44kg (55-100 lbs)</td>
        </tr>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/xl-dog-text.png" class="adoptable-size"/></td>
            <td>45kg+ (100 lbs+)</td>
        </tr>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/no-cats.png" class="adoptable-preference"/></td>
            <td>Prefers home with no cats</td>
        </tr>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/no-dogs.png" class="adoptable-preference"/></td>
            <td>Prefers home with no dogs</td>
        </tr>
        <tr>
            <td class="icon-container"><img src="<?php bloginfo("template_url"); ?>/images/icons/no-kids.png" class="adoptable-preference"/></td>
            <td>Prefers home with no children</td>
        </tr>
    </table> 
    </div>
</div>      
<!-- End Mobile Icons Legend -->

<!-- Adoptable Gallery -->
<div class="adoptable-gallery">
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
                echo "<h2><a href = '";
                the_permalink();
                echo "'>";
                the_title();
                echo "</a></h2><a href = '";
                the_permalink();
                echo "'>";
                the_post_thumbnail('adoptable');
                echo "</a>";
                // Display Size and Preference
                get_template_part( 'template-parts/adoptable', 'size-and-preference' );
                echo "</div>";

            }// end while loop
            wp_reset_postdata();
        } // end if
?>
</div> <!-- end Adoptable Gallery -->
</div> <!-- end entry-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
