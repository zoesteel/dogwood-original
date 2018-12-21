<div class="adoptable-icons">

<?php 
/*-------------------------------------------------------------
    Template to display adoptable's Size and Preferences Icons  
    ----------------------------------------------------------*/
// Display Size
if(function_exists('get_field')){
    if(get_field('size')){
        $size = get_field('size');
    }

    if($size == "Small"){
    // echo "woo, small-image.";
        ?>
        <img src="<?php bloginfo("template_url"); ?>/images/icons/small-dog-text.png" class="adoptable-size"/>
        <?php
    }
    elseif($size == 'Medium'){
        // echo "woof, medium-image.";
        ?>
        <img src="<?php bloginfo("template_url"); ?>/images/icons/med-dog-text.png" class="adoptable-size"/>
        <?php
    }
    elseif($size == 'Large'){
        // echo "woof, large-image.";
        ?>
        <img src="<?php bloginfo("template_url"); ?>/images/icons/large-dog-text.png" class="adoptable-size"/>
        <?php
    }
    elseif($size == 'Extra Large'){
        // echo "WOOF, X-LARGE.";
        ?>
        <img src="<?php bloginfo("template_url"); ?>/images/icons/xl-dog-text.png" class="adoptable-size"/>
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
        <img src="<?php bloginfo("template_url"); ?>/images/icons/no-cats.png" class="adoptable-preference"/>
        <?php
        }
        elseif($the_preference == 'no-dogs'){
            // echo "<p>NO DOGS ICON</p>";
            ?>
        <img src="<?php bloginfo("template_url"); ?>/images/icons/no-dogs.png" class="adoptable-preference"/>
        <?php
        }
        elseif($the_preference == 'no-children'){
            // echo "<p>NO CHILDREN ICON</p>";
            ?>
        <img src="<?php bloginfo("template_url"); ?>/images/icons/no-kids.png" class="adoptable-preference"/>
        <?php
        }
    }
}
?>

</div>