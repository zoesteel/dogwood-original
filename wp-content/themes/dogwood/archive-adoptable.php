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
        			<h1 class="adoptable-name">Adoptables</h1>
        		</header>
            </div><!-- col -->

                <!-- Icons Legend -->
        </div>
        <div class="row d-flex justify-content-center">
            <a data-toggle="collapse" data-target="#legend" class="icons-legend col-10">
                <h3>Icons Legend</h3>
            </a>
        </div>
        <div class="legend-container row d-flex justify-content-center">
            <div class="col-10 collapse show" id="legend">
                <div class="d-flex flex-row">
                <div class="col-6 d-flex flex-column flex-lg-row justify-content-between">
                    <div class="d-flex align-items-start flex-column pr-1">
                       <img src="<?php bloginfo("template_url"); ?>/images/icons/small-dog-text.png" class="adoptable-size"/>
                        <p class="justify-self-end">1-10kg (1-25 lbs)</p>
                    </div>      
                     <div class="d-flex align-items-start flex-column pr-1">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons/med-dog-text.png" class="adoptable-size"/>
                       <p class="justify-self-end">11-25kg (25-55 lbs)</p>
                    </div>  
                     <div class="d-flex align-items-start flex-column pr-1">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons/large-dog-text.png" class="adoptable-size"/></td>
                        <p class="justify-self-end">25-44kg (55-100 lbs)</p>
                    </div>
                    <div class="d-flex align-items-start flex-column pr-1">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons/xl-dog-text.png" class="adoptable-size"/>
                        <p class="justify-self-end">45kg+ (100 lbs+)</p>
                    </div>
                </div>
                <div class="col-6 d-flex flex-column flex-lg-row justify-content-center">
                    <div class="d-flex align-items-start flex-column pr-1">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons/no-cats.png" class="adoptable-preference"/>
                        <p class="justify-self-end">Prefers home with no cats</p>
                    </div>
                    
                    <div class="d-flex align-items-start flex-column pr-1">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons/no-dogs.png" class="adoptable-preference"/>
                        <p class="justify-self-end">Prefers home with no dogs</p>
                    </div>
                    <div class="d-flex align-items-start flex-column pr-1">
                        <img src="<?php bloginfo("template_url"); ?>/images/icons/no-kids.png" class="adoptable-preference"/>
                        <p class="justify-self-end">Prefers home with no children</p>
                    </div>
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
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="adoptable">
                                    <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                                    <a href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('adoptable'); ?></a>
                            
                                <?php // Display Size and Preference
                                get_template_part( 'template-parts/adoptable', 'size-and-preference' );
                                the_excerpt(); ?>
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
