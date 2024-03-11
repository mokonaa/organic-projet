<?php

    function mytheme_enqueue_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


    //CALLING NAVWALKER
    function register_navwalker() {
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    }
    add_action( 'after_setup_theme', 'register_navwalker' );


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

        $wp_customize->add_setting('banner_urlTxt', array(
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
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
            'label' => __('Banner Image', 'custom'),
            'description' => 'Banner image has to be in gif, png, jpg.',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_urlTxt', array(
            'label' => __('Banner Text Url', 'custom'),
            'description' => 'Banner Text Url must be valid.',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_url', array(
            'label' => __('Banner Url', 'custom'),
            'description' => 'Banner Url must be valid.',
            'section' => 'banner',
        )));
    }
    add_action('customize_register', 'banner_customize');


    add_theme_support( 'custom-logo');
