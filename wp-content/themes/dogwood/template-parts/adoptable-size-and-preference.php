<div class="adoptable-icons">

<?php 
/*-------------------------------------------------------------
    Template to display adoptable's Size and Preferences Icons  
    ----------------------------------------------------------*/

// Display Size
if(function_exists('get_field')){
    // Get size value
    if(get_field('size')){
        $size = get_field('size');
    }
?>

<div class="icons-container">
    <div id="icons" class="navigation">
        <ul class="icons">

<?php 
    if($size == "Small"){
    // echo "woo, small-image.";
        ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/small-dog-text.png" class="adoptable-size size-small" alt="Small sized dog icon" /></li>
        <?php
    }
    elseif($size == 'Medium'){
        // echo "woof, medium-image.";
        ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/med-dog-text.png" class="adoptable-size size-medium" alt="Medium sized dog icon" /></li>
        <?php
    }
    elseif($size == 'Large'){
        // echo "woof, large-image.";
        ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/large-dog-text.png" class="adoptable-size size-large" alt="Large sized dog icon" /></li>
        <?php
    }
    elseif($size == 'Extra Large'){
        // echo "WOOF, X-LARGE.";
        ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/xl-dog-text.png" class="adoptable-size size-x-large" alt="Extra large sized dog icon" /></li>
        <?php
    }
}

// Display Adoptable Preferences
if(get_the_terms( $post->ID , 'adoptable-preference' ))
    $preferenceterms = get_the_terms( $post->ID , 'adoptable-preference' );
if(count($preferenceterms) > 0){
    foreach ( $preferenceterms as $preference ) {

        $the_preference = $preference->slug;
        if($the_preference == "no-cats"){
            // echo "<p>NO CATS ICON</p>";
            ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/no-cats.png" class="adoptable-preference pref-no-cats" alt="Icon to indicate dog's preference for not good with cats" /></li>
        <?php
        }
        elseif($the_preference == 'no-dogs'){
            // echo "<p>NO DOGS ICON</p>";
            ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/no-dogs.png" class="adoptable-preference pref-no-dogs" alt="Icon to indicate dog's preference for not good with other dogs" /></li>
        <?php
        }
        elseif($the_preference == 'no-children'){
            // echo "<p>NO CHILDREN ICON</p>";
            ?>
        <li><img src="<?php bloginfo("template_url"); ?>/images/icons/no-kids.png" class="adoptable-preference pref-no-kids" alt="Icon to indicate dog's preference for not good with children" /></li>
        <?php
        }
    }
}
?>
        </ul> <!-- end .icons -->
    </div>  <!-- end .thumbs -->
</div> <!-- end .icons-container -->

</div>  <!-- end .adoptable-icons -->