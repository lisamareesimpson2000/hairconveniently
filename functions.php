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

//ADMIN STYLE conditional formats displaying 

function add_admin_styles(){
    wp_enqueue_style('hair_admin_styles', get_template_directory_uri() . '/assets/css/hair_admin.css' , array(), '0.1');
}
add_action('admin_enqueue_scripts', 'add_admin_styles');

//CUSTOM LOGO
function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//HOME CUSTOM HEADER IMAGE

$header_info = array(
    'width'         => 980,
    'height'        => 400,
    'default-image' => get_template_directory_uri() . '/assets/img/header-red.png',
);
add_theme_support( 'custom-header', $header_info );
 
$header_images = array(
    'hairModel' => array(
            'url'           => get_template_directory_uri() . '/assets/img/header-red.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/img/header-red.png',
            'description'   => 'Redhair',
    ),
    'hair' => array(
            'url'           => get_template_directory_uri() . '/assets/img/header-brown.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/img/header-brown.png',
            'description'   => 'hairImage',
    ),  
);
register_default_headers( $header_images );

//REGISTERING WIDGETS
add_action( 'widgets_init', 'add_sidebar' );
function add_sidebar() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'mobilehair' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'mobilehair' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widgettitle">',
    	'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'add_client_sidebar' );
function add_client_sidebar() {
    register_sidebar( array(
        'name' => __( 'Client Testimonial Sidebar', 'mobilehair' ),
        'id' => 'sidebar-2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'mobilehair' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h2 class="widgettitle">',
    	'after_title'   => '</h2>',
        )
    );
}

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom_post_types.php';
require get_template_directory() . '/inc/custom_fields.php';