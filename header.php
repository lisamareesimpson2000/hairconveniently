<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>Hair Conveniently</title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light custom_nav" role="navigation">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="pr-5">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                    echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="logo">';
                ?>
            </div>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'header_hair_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </nav>

<div>
    <!-- <img class="img-fluid mx-auto d-block w-100" alt="responsive" src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/red-banner.jpg"> -->
    
	<img class="img-fluid mx-auto d-block w-100" alt="responsive" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
</div>