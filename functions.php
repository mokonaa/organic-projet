<?php

    function mytheme_enqueue_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


    //add_theme_support( 'post_thumbnails'); 
   
    // LOADING STYLE AND BOOTSTRAP
    /*
    function wpbootstrap_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri());
        // wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
        // wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',[],1,true);
        // wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js');
    }

    add_action('wp_enqueue_scripts','wpbootstrap_styles');//*/


    //CALLING NAVWALKER
    function register_navwalker() {
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    }
    add_action( 'after_setup_theme', 'register_navwalker' );


    // REGISTER NEW MENU
    function my_menu () {
        register_nav_menu('primary', _('Menu Principal'));
    }
    add_action('init', 'my_menu');


    // BANNER EDITING
    function banner_customize($wp_customize) {

        $wp_customize->add_section('banner', array(
            'title' => __('Banner', 'custom'),
            'description' => 'Here you can change banner options',
            'priority' => 30,
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('banner_image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('banner_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('banner_title', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('banner_desc', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
            'label' => __('Banner Image', 'custom'),
            'description' => 'Banner image has to be in gif, png, jpg.',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_url', array(
            'label' => __('Banner Url', 'custom'),
            'description' => 'Banner Url must be valid.',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_title', array(
            'label' => __('Banner Title', 'custom'),
            'description' => 'Banner Title must be valid.',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_desc', array(
            'label' => __('Banner Description', 'custom'),
            'description' => 'Banner Description must be valid.',
            'section' => 'banner',
        )));
    }
    add_action('customize_register', 'banner_customize');


    function mytheme_customize_register( $wp_customize ) {
        //All our sections, settings, and controls will be added here
        $wp_customize->add_setting( 'header_textcolor' , array(
            'default'     => "#ffebce",
            'transport'   => 'refresh',
        ) );

        $wp_customize->add_setting( 'footer_textcolor' , array(
            'default'     => "#ffebce",
            'transport'   => 'refresh',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
            'label'        => __( 'Header Color', 'mytheme' ),
            'section'    => 'colors',
        ) ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_textcolor', array(
            'label'        => __( 'Footer Color', 'mytheme' ),
            'section'    => 'colors',
        ) ) );
    }
    add_action( 'customize_register', 'mytheme_customize_register' );


    add_theme_support( 'custom-logo');
