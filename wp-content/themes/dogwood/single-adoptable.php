<?php
/**
 * The template for displaying all single Adoptable posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dogwood
 */

get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="site-main" role="main">
        <div class="row">
            <div class="col-12 entry-content">
                <?php
                // Display Adoptable Name
                echo "<h1 class='adoptable-name'>";
                the_title();
                echo "</h1>";?>

                <div class="col-12 col-md-7">
                    <?php // Display Gallery
                    if( have_rows('images')){
                        echo "<div class='slide-container'>";
                        // Adoptable Slider
                        echo "<ul class='rslides' id='adoptable-slides'>";

                        while( have_rows('images')){
                            the_row();
                            
                            if(get_sub_field('image')) {
                                $image = get_sub_field('image');

                                if($image != '') 
                                    echo "<li><img src='$image' /></li>";
                            }
                        }
                        echo "</ul>";

                        // Adoptable Pager
                        echo "<ul id='adoptable-slides-pager'>";
                        
                        while( have_rows('images')){
                            the_row();
                            if(get_sub_field('image')) {
                                $image = get_sub_field('image');

                                if($image != '') 
                                    echo "<li><a href='#'><img src='$image' width='75px' /></a></li>";
                            }
                        }
                        echo "</ul></div>";
                    }

                ?>
                </div>

                <!-- Adoptable Info -->
                <div class='col-12 col-md-5 adoptable-info'>
                    <?php
                    // Display Adoptable Info
                    if(function_exists('get_field')){
                        if(get_field('sex'))
                            $sex = get_field('sex');
                        if(get_field('age'))
                            $age = get_field('age');
                        if(get_field('breed'))
                            $breed = get_field('breed');
                        if(get_field('story'))
                            $story = get_field('story');
                    }
                        echo "<p>Sex: $sex</p>";
                        echo "<p>Age: $age</p>";
                        echo "<p>Breed: $breed</p>";

                    // Display Size and Preference
                        get_template_part( 'template-parts/adoptable', 'size-and-preference' );
                    ?>

                    <!-- Link to Adopt Form -->
                    <a href="../../adopt/adoption-form"><button class="button-adopt">Adopt</button></a>

                    </div>
                    <!-- End Adoptable Info -->

                    <div class="clear"></div>

                    <section class='adoptable-story'>
                        <h2>About <?php the_title();?></h2>
                    
                        <p class='adoptable-story'><?php echo $story; ?> </p>
                    </section>
                </div>
            </div> <!-- end entry-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
