<?php
    function hairtheme_customize_register($wp_customize) {
        //WIDGET SIDEBAR LAYOUT
        $wp_customize->add_section( 'layout_section', array(
            'title' => __('Layout Section', 'mobilehair'),
            'priority' => 30,
        ));
        $wp_customize->add_setting( 'sidebar_position_setting', array(
            'default' => 'right',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_sidebar_control', array(
            'label' => __('Sidebar Position', mobilehair),
            'section' => 'layout_section',
            'settings' => 'sidebar_position_setting',
            'type' => 'radio',
            'choices' => array(
                'left' => 'Left Side',
                'right' => 'Right Side',
            )
        )));
        //CUSTOMISE COLOURS
    
        $wp_customize->add_section( 'hair_theme_colour_section', array(
            'title' => __('Main Colours', 'mobilehair'),
            'priority' => 30,
        ));
        //background
        $wp_customize->add_setting( 'hair_background_colour_setting', array(
            'default' => '#ffffff',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hair_background_control', array(
            'label' => __('Background Colour', mobilehair),
            'section' => 'hair_theme_colour_section',
            'settings' => 'hair_background_colour_setting',
        )));
        // nav
        $wp_customize->add_setting( 'custom_nav_colour_setting', array(
            'default' => '#ffffff',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_nav_control', array(
            'label' => __('Nav Colour', mobilehair),
            'section' => 'hair_theme_colour_section',
            'settings' => 'custom_nav_colour_setting',
        )));
        //text
        $wp_customize->add_setting( 'custom_text_colour_setting', array(
            'default' => '#030e19',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_text_control', array(
            'label' => __('Text Colour', mobilehair),
            'section' => 'hair_theme_colour_section',
            'settings' => 'custom_text_colour_setting',
        )));
        //footer
        $wp_customize->add_setting( 'custom_footer_colour_setting', array(
            'default' => '#ffbb72',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_footer_control', array(
            'label' => __('Footer Colour', WRRescue),
            'section' => 'hair_theme_colour_section',
            'settings' => 'custom_footer_colour_setting',
        )));
        //heading
        $wp_customize->add_setting( 'custom_title_colour_setting', array(
            'default' => '#030e19',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_title_control', array(
            'label' => __('Heading Colour', WRRescue),
            'section' => 'hair_theme_colour_section',
            'settings' => 'custom_title_colour_setting',
        )));
        
    }
    add_action( 'customize_register', 'hairtheme_customize_register');

    function hair_customize_css(){
        ?>
             <style type="text/css">
                 body{
                     background-color: <?php echo get_theme_mod('hair_background_colour_setting', '#fffff'); ?>;
                     color: <?php echo get_theme_mod('custom_text_colour_setting', '#030e19'); ?>;
                 }
                 h2{
                 color:<?php echo get_theme_mod('custom_title_colour_setting', '#030e19'); ?>;
                }
                 .custom_nav{
                     background-color: <?php echo get_theme_mod('custom_nav_colour_setting', '#fffff'); ?> !important;
                 } 
                 .custom_footer{
                     background-color: <?php echo get_theme_mod('custom_footer_colour_setting', '#ffbb72'); ?> !important;
                 }

             </style>
        <?php
    
    }
    add_action('wp_head', 'hair_customize_css');