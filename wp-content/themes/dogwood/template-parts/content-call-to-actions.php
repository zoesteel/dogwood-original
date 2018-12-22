<?php
/*-------------------------------------------------------------
    Template to display call to actions Adopt/Foster/Volunteer  
    ----------------------------------------------------------*/
?>

<div class="row call-to-actions ">

	<?php 

	$cta1_img = get_field('cta1_img', $post->ID);
	$cta1_text = get_field('cta1_text', $post->ID);


	$cta2_img = get_field('cta2_img', $post->ID);
	$cta2_text = get_field('cta2_text', $post->ID);


	$cta3_img = get_field('cta3_img', $post->ID);
	$cta3_text = get_field('cta3_text', $post->ID);

	?>

	<div class="col-12 col-sm-4 cta-img-container">
		<a href="volunteer">
			<img src="<?php echo $cta1_img; ?>" alt="Link to Volunteer Page" class="cta-links">
			<p class="cta-text"><?php echo $cta1_text; ?></p>
		</a> 
		<!-- <div class="overlay"></div> -->
	</div>

	<div class="col-12 col-sm-4 cta-img-container ">
		<a href="foster">
			<img src="<?php echo $cta2_img; ?>" alt="Link to Foster Page" class="cta-links">
			<p class="cta-text"><?php echo $cta2_text; ?></p>
		</a>
		<!-- <div class="overlay"></div> -->
	</div>

	<div class="col-12 col-sm-4  cta-img-container">
		<a href="adoptables">
			<img src="<?php echo $cta3_img; ?>" alt="Link to Adoptables Page" class="cta-links">
			<p class="cta-text"><?php echo $cta3_text; ?></p>
		</a>
		<!-- <div class="overlay"></div> -->
	</div>

</div>