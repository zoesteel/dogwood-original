<?php
/*-------------------------------------------------------------
    Template to display Education/Resources links 
    ----------------------------------------------------------*/



$fields = get_fields();
// var_dump( $fields );

if( $fields )
{
	foreach( $fields as $field_name => $value )
	{
		$field = get_field_object($field_name);

		
		if($field != '' && $field_name != 'heading_image'){
			if(have_rows($field_name)) {
				echo "<div class='resource $field_name'>";
				echo "<h1>";
				echo $field['label'];
				echo "</h1>";
				echo "<ul class=".$field_name.">";

	    while( have_rows($field_name)){
	        the_row();

	        if(get_sub_field('link') && get_sub_field('name')) {
	        	$name = get_sub_field('name');
	        	$link = get_sub_field('link');

	        	if($link != '' && $name != '')
	        		echo "<li><a href='$link'>$name</a></li>";
	        }
    	}
    echo "</ul></div>";
  		}	
		}
	}
}


?>