<?php
    function hairtheme_customize_register($wp_customize) {

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
            'label' => __('Footer Colour', mobilehair),
            'section' => 'hair_theme_colour_section',
            'settings' => 'custom_footer_colour_setting',
        )));
        //heading
        $wp_customize->add_setting( 'custom_title_colour_setting', array(
            'default' => '#030e19',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_title_control', array(
            'label' => __('Heading Colour', mobilehair),
            'section' => 'hair_theme_colour_section',
            'settings' => 'custom_title_colour_setting',
        )));
        //IMAGE SECTION
        $wp_customize->add_section( 'hair_image_section', array(
            'title' => __('Featured Image', 'mobilehair'),
            'priority' => 30,
        ));
        //image title
        $wp_customize->add_setting( 'hair_image_text_setting', array(
            'default' => 'EXAMPLE HEADLINE TEXT!',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hair_image_text_control', array(
            'label' => __('Image heading', mobilehair),
            'section' => 'hair_image_section',
            'settings' => 'hair_image_text_setting',
        )));
        //image
        $wp_customize->add_setting( 'hair_image_setting');
    
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'hair_image_control', array(
            'label' => __('Image One', mobilehair),
            'section' => 'hair_image_section',
            'settings' => 'hair_image_setting',
            'width' => 286,
            'height' => 300
        )));
        
        //CLIENT TESTIMONIAL SECTION
        $wp_customize->add_section( 'client_testimonial_section', array(
            'title' => __('Client testimonials', 'mobilehair'),
            'priority' => 30,
        ));
        //DISPLAY OR NOT
        $wp_customize->add_setting( 'display_YN_setting', array(
            'default' => 'No'
        ));
    
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_YN_control', array(
            'label' => __('Display this section?', mobilehair),
            'section' => 'client_testimonial_section',
            'settings' => 'display_YN_setting',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        //Testimonial title
        $wp_customize->add_setting( 'client_testimonial_setting', array(
            'default' => 'EXAMPLE HEADLINE TEXT!',
            'transport' => 'refresh',
        ));
    
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'client_testimonial_control', array(
            'label' => __('Testimonial heading', mobilehair),
            'section' => 'client_testimonial_section',
            'settings' => 'client_testimonial_setting',
        )));
        //Testimonial Textbox
        $wp_customize->add_setting( 'textbox_testimonial_setting', array(
            'default' => '"Example quote" - Sally',
        ));
    
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'textbox_testimonial_control', array(
            'label' => __('Client testimonial quote', mobilehair),
            'section' => 'client_testimonial_section',
            'settings' => 'textbox_testimonial_setting',
            'type' => 'textarea',
        )));
        //client testimonial image
        $wp_customize->add_setting( 'testimonial_image_setting');
    
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'testimonial_image_control', array(
            'label' => __('Image', mobilehair),
            'section' => 'client_testimonial_section',
            'settings' => 'testimonial_image_setting',
            'width' => 286,
            'height' => 300
        )));
        //ABOUT HEADER IMAGE
        $wp_customize->add_section( 'about_image_section', array(
            'title' => __('About Header Image', 'mobilehair'),
            'priority' => 30,
        ));
         $wp_customize->add_setting( 'about_image_setting' );
    
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'about_image_control', array(
            'label' => __('About Header Image', mobilehair),
            'section' => 'about_image_section',
            'settings' => 'about_image_setting',
            'width' => 980,
            'height' => 400,
        )));
        //SERVICE HEADER IMAGE
        $wp_customize->add_section( 'service_image_section', array(
            'title' => __('Service Header Image', 'mobilehair'),
            'priority' => 30,
        ));
         $wp_customize->add_setting( 'service_image_setting' );
    
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'service_image_control', array(
            'label' => __('Service Header Image', mobilehair),
            'section' => 'service_image_section',
            'settings' => 'service_image_setting',
            'width' => 980,
            'height' => 400,
        )));

        //CONTACT PHONE SECTION
        $wp_customize->add_section( 'hair_phone_section', array(
            'title' => __('Contact Phone No.', 'mobilehair'),
            'priority' => 30,
        ));
        //contact title
        $wp_customize->add_setting( 'hair_phone_setting', array(
            'default' => '027 HAIR 777',
        ));
    
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hair_phone_control', array(
            'label' => __('Phone Number', mobilehair),
            'section' => 'hair_phone_section',
            'settings' => 'hair_phone_setting',
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