<?php

// Register Custom Post Type
function lc_student_news() {

	$labels = array(
		'name'                  => _x( 'Student News', 'Post Type General Name', 'lorainccc' ),
		'singular_name'         => _x( 'Student News', 'Post Type Singular Name', 'lorainccc' ),
		'menu_name'             => __( 'Student News', 'lorainccc' ),
		'name_admin_bar'        => __( 'Student News', 'lorainccc' ),
		'archives'              => __( 'Student News Archives', 'lorainccc' ),
		'attributes'            => __( 'Student News Attributes', 'lorainccc' ),
		'parent_item_colon'     => __( 'Parent Student News:', 'lorainccc' ),
		'all_items'             => __( 'All Student News', 'lorainccc' ),
		'add_new_item'          => __( 'Add Student News', 'lorainccc' ),
		'add_new'               => __( 'Add Student News', 'lorainccc' ),
		'new_item'              => __( 'New Student News', 'lorainccc' ),
		'edit_item'             => __( 'Edit Student News', 'lorainccc' ),
		'update_item'           => __( 'Update Student News', 'lorainccc' ),
		'view_item'             => __( 'View Student News', 'lorainccc' ),
		'view_items'            => __( 'View Student News', 'lorainccc' ),
		'search_items'          => __( 'Search Student News', 'lorainccc' ),
		'not_found'             => __( 'Not found', 'lorainccc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lorainccc' ),
		'featured_image'        => __( 'Featured Image', 'lorainccc' ),
		'set_featured_image'    => __( 'Set featured image', 'lorainccc' ),
		'remove_featured_image' => __( 'Remove featured image', 'lorainccc' ),
		'use_featured_image'    => __( 'Use as featured image', 'lorainccc' ),
		'insert_into_item'      => __( 'Insert into item', 'lorainccc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Student News', 'lorainccc' ),
		'items_list'            => __( 'Student News list', 'lorainccc' ),
		'items_list_navigation' => __( 'Student News list navigation', 'lorainccc' ),
		'filter_items_list'     => __( 'Filter Student News list', 'lorainccc' ),
	);
	$args = array(
		'label'                 => __( 'Student News', 'lorainccc' ),
		'description'           => __( 'Post Type Description', 'lorainccc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'student_news', $args );

}
add_action( 'init', 'lc_student_news', 0 );
?>