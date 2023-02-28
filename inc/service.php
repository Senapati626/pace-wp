<?php

// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'services', 'Post Type General Name', 'projectandcontentexperts' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'projectandcontentexperts' ),
		'menu_name' => _x( 'services', 'Admin Menu text', 'projectandcontentexperts' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'projectandcontentexperts' ),
		'archives' => __( 'Service Archives', 'projectandcontentexperts' ),
		'attributes' => __( 'Service Attributes', 'projectandcontentexperts' ),
		'parent_item_colon' => __( 'Parent Service:', 'projectandcontentexperts' ),
		'all_items' => __( 'All services', 'projectandcontentexperts' ),
		'add_new_item' => __( 'Add New Service', 'projectandcontentexperts' ),
		'add_new' => __( 'Add New', 'projectandcontentexperts' ),
		'new_item' => __( 'New Service', 'projectandcontentexperts' ),
		'edit_item' => __( 'Edit Service', 'projectandcontentexperts' ),
		'update_item' => __( 'Update Service', 'projectandcontentexperts' ),
		'view_item' => __( 'View Service', 'projectandcontentexperts' ),
		'view_items' => __( 'View services', 'projectandcontentexperts' ),
		'search_items' => __( 'Search Service', 'projectandcontentexperts' ),
		'not_found' => __( 'Not found', 'projectandcontentexperts' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'projectandcontentexperts' ),
		'featured_image' => __( 'Featured Image', 'projectandcontentexperts' ),
		'set_featured_image' => __( 'Set featured image', 'projectandcontentexperts' ),
		'remove_featured_image' => __( 'Remove featured image', 'projectandcontentexperts' ),
		'use_featured_image' => __( 'Use as featured image', 'projectandcontentexperts' ),
		'insert_into_item' => __( 'Insert into Service', 'projectandcontentexperts' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'projectandcontentexperts' ),
		'items_list' => __( 'services list', 'projectandcontentexperts' ),
		'items_list_navigation' => __( 'services list navigation', 'projectandcontentexperts' ),
		'filter_items_list' => __( 'Filter services list', 'projectandcontentexperts' ),
	);
	$args = array(
		'label' => __( 'Service', 'projectandcontentexperts' ),
		'description' => __( '', 'projectandcontentexperts' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

?>