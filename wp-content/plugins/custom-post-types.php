<?php

 /*
	Plugin Name: Dogwood Custom Post Types
	Description: Dogwood Custom Post Types
	Version: 1.0
	Author: Alex Hon
	Author URI: ahon.htpwebdesign.ca
	Licence: GPL2
*/

function dogwood_register_custom_post_types() {

/*--------------------------
 * Adoptables CPT
 ------------------------*/
		$labels = array(
		'name'               => _x( 'Adoptables', 'post type general name' ),
		'singular_name'      => _x( 'Adoptable', 'post type singular name'),
		'menu_name'          => _x( 'Adoptables', 'admin menu' ),
		'name_admin_bar'     => _x( 'Adoptable', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'adoptable' ),
		'add_new_item'       => __( 'Add New Adoptable' ),
		'new_item'           => __( 'New Adoptable' ),
		'edit_item'          => __( 'Edit Adoptable' ),
		'view_item'          => __( 'View Adoptables' ),
		'all_items'          => __( 'All Adoptables' ),
		'search_items'       => __( 'Search Adoptables' ),
		'parent_item_colon'  => __( 'Parent Adoptables:' ),
		'not_found'          => __( 'No adoptables found.' ),
		'not_found_in_trash' => __( 'No adoptables found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'adoptables' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
    'menu_icon'          => 'dashicons-heart',
		'supports'           => array('title', 'thumbnail')
	);
	register_post_type( 'adoptable', $args );
remove_post_type_support( 'my_post_type', 'editor' );
/*---------------------
	End Adoptables CPT
	--------------------*/

/*---------------------
	Sponsor CPT
	--------------------*/
	$labels = array(
		'name'               => _x( 'Sponsors', 'post type general name' ),
		'singular_name'      => _x( 'Sponsor', 'post type singular name'),
		'menu_name'          => _x( 'Sponsors', 'admin menu' ),
		'name_admin_bar'     => _x( 'Sponsor', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'sponsor' ),
		'add_new_item'       => __( 'Add New Sponsor' ),
		'new_item'           => __( 'New Sponsor' ),
		'edit_item'          => __( 'Edit Sponsor' ),
		'view_item'          => __( 'View Sponsor' ),
		'all_items'          => __( 'All Sponsors' ),
		'search_items'       => __( 'Search Sponsors' ),
		'parent_item_colon'  => __( 'Parent Sponsors:' ),
		'not_found'          => __( 'No sponsors found.' ),
		'not_found_in_trash' => __( 'No sponsors found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'sponsors' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
        'menu_icon'          => 'dashicons-thumbs-up',
		'supports'           => array('title', 'thumbnail')
	);
	register_post_type( 'sponsor', $args );

/*--------------------
	End Sponsor CPT
	------------------*/

/*----------------
	Resource CPT
	--------------*/
	$labels = array(
		'name'               => _x( 'Resources', 'post type general name' ),
		'singular_name'      => _x( 'Resource', 'post type singular name'),
		'menu_name'          => _x( 'Resources', 'admin menu' ),
		'name_admin_bar'     => _x( 'Resource', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'resource' ),
		'add_new_item'       => __( 'Add New Resource' ),
		'new_item'           => __( 'New Resource' ),
		'edit_item'          => __( 'Edit Resource' ),
		'view_item'          => __( 'View Resource' ),
		'all_items'          => __( 'All Resources' ),
		'search_items'       => __( 'Search Resources' ),
		'parent_item_colon'  => __( 'Parent Resources:' ),
		'not_found'          => __( 'No resources found.' ),
		'not_found_in_trash' => __( 'No resources found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'resources' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
        'menu_icon'          => 'dashicons-list-view',
		'supports'           => array('title')
	);
	register_post_type( 'resource', $args );
/*----------------
	End Resource CPT
	---------------*/

}
add_action( 'init', 'dogwood_register_custom_post_types' );


/* --------------
	Rewrite Flush 
	---------------*/
function dogwood_rewrite_flush() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'dogwood_rewrite_flush' );


/*------------------------------------
	Register Taxonomies
	------------------------------------*/
function dogwood_register_taxonomies() {

/*-----------------------
	Sponsor Type Taxonomy
	----------------------*/
		$labels = array(
			'name'              => _x( 'Sponsor Types', 'taxonomy general name' ),
			'singular_name'     => _x( 'Sponsor Type', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Sponsor Types' ),
			'all_items'         => __( 'All Sponsor Types' ),
			'parent_item'       => __( 'Parent Sponsor Type' ),
			'parent_item_colon' => __( 'Parent Sponsor Type:' ),
			'edit_item'         => __( 'Edit Sponsor Type' ),
			'update_item'       => __( 'Update Sponsor Type' ),
			'add_new_item'      => __( 'Add New Sponsor Type' ),
			'new_item_name'     => __( 'New Sponsor Type Name' ),
			'menu_name'         => __( 'Sponsor Type' ),
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'sponsor-types' ),
		);
		register_taxonomy( 'sponsor-type', array( 'sponsor' ), $args );
/*-------------------------
	End Sponsor Type Taxonomy
	-------------------------*/

/*-----------------------
	Resource Type Taxonomy
	-----------------------*/
		$labels = array(
			'name'              => _x( 'Resource Types', 'taxonomy general name' ),
			'singular_name'     => _x( 'Resource Type', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Resource Types' ),
			'all_items'         => __( 'All Resource Types' ),
			'parent_item'       => __( 'Parent Resource Type' ),
			'parent_item_colon' => __( 'Parent Resource Type:' ),
			'edit_item'         => __( 'Edit Resource Type' ),
			'update_item'       => __( 'Update Resource Type' ),
			'add_new_item'      => __( 'Add New Resource Type' ),
			'new_item_name'     => __( 'New Resource Type Name' ),
			'menu_name'         => __( 'Resource Type' ),
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'resource-types' ),
		);
		register_taxonomy( 'resource-type', array( 'resource' ), $args );
/*-----------------------
	End Resource Type Taxonomy
	-----------------------*/

/* -----------------------------
	Adoptable Preference Taxonomy
	-----------------------------*/
		$labels = array(
			'name'              => _x( 'Adoptable Preferences', 'taxonomy general name' ),
			'singular_name'     => _x( 'Adoptable Preference', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Adoptable Preferences' ),
			'all_items'         => __( 'All Adoptable Preferences' ),
			'parent_item'       => __( 'Parent Adoptable Preference' ),
			'parent_item_colon' => __( 'Parent Adoptable Preference:' ),
			'edit_item'         => __( 'Edit Adoptable Preference' ),
			'update_item'       => __( 'Update Adoptable Preference' ),
			'add_new_item'      => __( 'Add New Adoptable Preference' ),
			'new_item_name'     => __( 'New Adoptable Preference' ),
			'menu_name'         => __( 'Adoptable Preferences' ),
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'adoptable-preferences' ),
		);
		register_taxonomy( 'adoptable-preference', array( 'adoptable' ), $args );
/* ---------------------------------
	End Adoptable Preference Taxonomy
	---------------------------------*/
}
add_action( 'init', 'dogwood_register_taxonomies', 0 );