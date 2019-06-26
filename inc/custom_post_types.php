<?php

function add_service_post_type(){
    $labels = array(
		'name'               => _x( 'Service Posts', 'post type general name', 'mobilehair' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'mobilehair' ),
		'menu_name'          => _x( 'Service Posts', 'admin menu', 'mobilehair' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'mobilehair' ),
		'add_new'            => _x( 'Add New', 'Service', 'mobilehair' ),
		'add_new_item'       => __( 'Add New Service', 'mobilehair' ),
		'new_item'           => __( 'New Service', 'mobilehair' ),
		'edit_item'          => __( 'Edit Service', 'mobilehair' ),
		'view_item'          => __( 'View Service', 'mobilehair' ),
		'all_items'          => __( 'All Service Posts', 'mobilehair' ),
		'search_items'       => __( 'Search Service Posts', 'mobilehair' ),
		'parent_item_colon'  => __( 'Parent Service Posts:', 'mobilehair' ),
		'not_found'          => __( 'No service posts found.', 'mobilehair' ),
		'not_found_in_trash' => __( 'No service posts found in Trash.', 'mobilehair' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list services available to make an appointment',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-art',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('service', $args);
}
add_action('init', 'add_service_post_type');

function add_subService_post_type(){
    $labels = array(
		'name'               => _x( 'SubService', 'post type general name', 'mobilehair' ),
		'singular_name'      => _x( 'SubService', 'post type singular name', 'mobilehair' ),
		'menu_name'          => _x( 'Sub Service', 'admin menu', 'mobilehair' ),
		'name_admin_bar'     => _x( 'Sub Service', 'add new on admin bar', 'mobilehair' ),
		'add_new'            => _x( 'Add New', 'Sub Service', 'mobilehair' ),
		'add_new_item'       => __( 'Add New Sub Service', 'mobilehair' ),
		'new_item'           => __( 'New Sub Service', 'mobilehair' ),
		'edit_item'          => __( 'Edit Sub Service', 'mobilehair' ),
		'view_item'          => __( 'View Sub Service', 'mobilehair' ),
		'all_items'          => __( 'All Sub Service Posts', 'mobilehair' ),
		'search_items'       => __( 'Search Sub Service Posts', 'mobilehair' ),
		'parent_item_colon'  => __( 'Parent Sub Service Posts:', 'mobilehair' ),
		'not_found'          => __( 'No sub service posts found.', 'mobilehair' ),
		'not_found_in_trash' => __( 'No sub service posts found in Trash.', 'mobilehair' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list of sub services available',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'show_in_rest' => true, //change this to false if don't want it to auto refresh
        'menu_icon' => 'dashicons-admin-appearance',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('subservice', $args);
}
add_action('init', 'add_subService_post_type');

function add_enquiries_post_type(){
    $labels = array(
        'name' => _x('Enquiries', 'post type name', 'mobilehair'),
        'singular_name' => _x('Enquiry', 'post types singluar name', 'mobilehair'),
        'add_new_item' => _x('Add New Enquiry', 'adding new enquiry', 'mobilehair')
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Enquiries that come through our website',
        'public' => true,
        'menu_position' => 20,
        'query_var' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array(
            'title',
            'editor'
        ),
    );
    register_post_type('enquiries', $args);
}
add_action('init', 'add_enquiries_post_type');

function add_stylist_post_type(){
    $labels = array(
		'name'               => _x( 'Stylist Posts', 'post type general name', 'mobilehair' ),
		'singular_name'      => _x( 'Stylist', 'post type singular name', 'mobilehair' ),
		'menu_name'          => _x( 'Stylist Posts', 'admin menu', 'mobilehair' ),
		'name_admin_bar'     => _x( 'Stylist', 'add new on admin bar', 'mobilehair' ),
		'add_new'            => _x( 'Add New', 'Stylist', 'mobilehair' ),
		'add_new_item'       => __( 'Add New Stylist', 'mobilehair' ),
		'new_item'           => __( 'New Stylist', 'mobilehair' ),
		'edit_item'          => __( 'Edit Stylist', 'mobilehair' ),
		'view_item'          => __( 'View Stylist', 'mobilehair' ),
		'all_items'          => __( 'All Stylist Posts', 'mobilehair' ),
		'search_items'       => __( 'Search Stylist Posts', 'mobilehair' ),
		'parent_item_colon'  => __( 'Parent Stylist Posts:', 'mobilehair' ),
		'not_found'          => __( 'No stylist posts found.', 'mobilehair' ),
		'not_found_in_trash' => __( 'No stylist posts found in Trash.', 'mobilehair' )
	);
    $args = array(
        'labels' => $labels,
        'description' => 'A list stylists available to make an appointment with',
        'public' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('stylist', $args);
}
add_action('init', 'add_stylist_post_type');