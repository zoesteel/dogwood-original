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

<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">
        <div class="row">
            <div class="col-12 entry-content">
        		<header>
        			<h1>Adoptables</h1>
        		</header>
            </div><!-- col -->

                <!-- Icons Legend -->

            <a data-toggle="collapse" data-target="#legend" class="icons-legend col-12">
                <h3>Icons Legend</h3>
            </a>
                <div class="collapse col-6" id="legend">
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
            </div><!-- col -->      
            <!-- End Mobile Icons Legend -->
        </div><!-- row -->
        <div class="row">
                <!-- Adoptable Gallery -->
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

                            ?> 
                            <div class="col-6 col-sm-6 col-md-4">
                                <div class="adoptable">
                                    <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                                    <a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('adoptable'); ?></a>
                            
                                <?php // Display Size and Preference
                                get_template_part( 'template-parts/adoptable', 'size-and-preference' );?>
                                </div>
                            </div>

                       <?php  }// end while loop
                        wp_reset_postdata();
                        } // end if
                    ?>
                </div> <!-- end entry-content -->
            </main><!-- #main -->
    	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
