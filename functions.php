<?php

    function add_custom_hc_files() {
        wp_enqueue_style('hc_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), '4.3.1');
        wp_enqueue_style('hc_custom_stylesheet', get_template_directory_uri() . '/assets/css/hc_custom_theme_style.css' , array(), '0.1');
        wp_enqueue_script('jquery');
        wp_enqueue_script('hc_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.3.1', true);
    }
    add_action('wp_enqueue_scripts', 'add_custom_hc_files');
    function register_my_menu() {
        register_nav_menu('header_hair_menu','The menu which appears at the top of the page');
    }
    add_action( 'init', 'register_my_menu' );


    add_theme_support( 'wp-block-styles' );
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-header' );

require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

//CUSTOM LOGO
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//CUSTOM HEADER IMAGE

$header_info = array(
    'width'         => 980,
    'height'        => 400,
    'default-image' => get_template_directory_uri() . '/assets/img/red-banner.jpg',
);
add_theme_support( 'custom-header', $header_info );
 
$header_images = array(
    'hairModel' => array(
            'url'           => get_template_directory_uri() . '/assets/img/red-banner.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/img/red-banner.jpg',
            'description'   => 'Redhair',
    ),
    'hair' => array(
            'url'           => get_template_directory_uri() . '/assets/img/brownhairbanner.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/img/brownhairbanner.jpg',
            'description'   => 'hairImage',
    ),  
);
register_default_headers( $header_images );