<?php

    function mytheme_enqueue_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


    function newsletter_customize($wp_customize)
    {
        $wp_customize->add_section('newsletter', array(
            'title' => __('Newsletter', 'custom'),
            'description' => 'Tu peux changer ici les informations de ce bloc',
            'priority' => 30,
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('newsletter_image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));
        $wp_customize->add_setting('newsletter_url', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));
        $wp_customize->add_setting('newsletter_title', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'newsletter_image', array(
            'label' => __('Image', 'custom'),
            'description' => 'L\'image doit être en gif, png, jpg.',
            'section' => 'newsletter', // Corrected section slug
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter_url', array(
            'label' => __('Lien', 'custom'),
            'description' => 'La redirection doit être valide',
            'section' => 'newsletter', // Corrected section slug
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter_title', array(
            'label' => __('Titre', 'custom'),
            'description' => 'Le titre doit être valide',
            'section' => 'newsletter', // Corrected section slug
        )));

        // Ajouter un paramètre de personnalisation pour la couleur du texte
        $wp_customize->add_setting('newsletter_text_color', array(
            'default' => '#fff', // Couleur par défaut
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'newsletter_text_color', array(
            'label' => __('Couleur du texte', 'custom'),
            'section' => 'colors',
        )));
    }
    add_action('customize_register', 'newsletter_customize');


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
            'label' => __('Titre', 'custom'),
            'description' => '',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_desc', array(
            'label' => __('Description', 'custom'),
            'description' => '',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
            'label' => __('Image', 'custom'),
            'description' => '',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_urlTxt', array(
            'label' => __('Texte (call to action bouton)', 'custom'),
            'description' => '',
            'section' => 'banner',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_url', array(
            'label' => __('Lien Url', 'custom'),
            'description' => '',
            'section' => 'banner',
        )));
    }
    add_action('customize_register', 'banner_customize');


    // PROMOTIONS EDITING
    function promotions_customize($wp_customize) {

        $wp_customize->add_section('promotions', array(
            'title' => __('Promotions', 'custom'),
            'description' => '',
            'priority' => 30,
            'capability' => 'edit_theme_options'
        ));
        
        for ($i=0; $i<2; $i++) {
            
            $wp_customize->add_setting('promotion_image'.$i, array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            ));
    
            $wp_customize->add_setting('promotion_title'.$i, array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            ));
    
            $wp_customize->add_setting('promotion_desc'.$i, array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            ));
    
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promotion_image'.$i, array(
                'label' => __('Promotion '.($i+1).' Image', 'custom'),
                'description' => '',
                'section' => 'promotions',
            )));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_title'.$i, array(
                'label' => __('Promotion '.($i+1).' Titre', 'custom'),
                'description' => '',
                'section' => 'promotions',
            )));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_desc'.$i, array(
                'label' => __('Promotion '.($i+1).' Description', 'custom'),
                'description' => '',
                'section' => 'promotions',
            )));//*/
        }
    }
    add_action('customize_register', 'promotions_customize');
    

    // ABOUT US EDITING
    function aboutus_customize($wp_customize) {

        $wp_customize->add_section('aboutus', array(
            'title' => __('À propos de nous', 'custom'),
            'description' => 'Here you can change promotions options',
            'priority' => 30,
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutus_fondimage', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutus_description', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutus_title', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutus_text', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('bouton_text', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));


        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutus_fondimage', array(
            'label' => __('Image (partie gauche)', 'custom'),
            'description' => 'Image has to be in gif, png, jpg.',
            'section' => 'aboutus',
        )));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_description', array(
            'label' => __('Petite description de la section', 'custom'),
            'description' => '',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_title', array(
            'label' => __('Titre de la section', 'custom'),
            'description' => '',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_text', array(
            'label' => __('Paragraphe', 'custom'),
            'description' => '',
            'section' => 'aboutus',
        )));



        for ($j=0; $j<2; $j++) {
            $wp_customize->add_setting('aboutus_bloc'.($j+1).'description', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            ));
    
            $wp_customize->add_setting('aboutus_bloc'.($j+1).'title', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            ));
    
            $wp_customize->add_setting('aboutusbloc'.($j+1).'_image', array(
                'default' => '',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options'
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc'.($j+1).'title', array(
                'label' => __('Titre du bloc '.($j+1), 'custom'),
                'description' => '',
                'section' => 'aboutus',
            )));
    
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc'.($j+1).'description', array(
                'label' => __('Description du bloc '.($j+1), 'custom'),
                'description' => '',
                'section' => 'aboutus',
            )));
    
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutusbloc'.($j+1).'_image', array(
                'label' => __('Pictos associées au bloc '.($j+1), 'custom'),
                'description' => '',
                'section' => 'aboutus',
            )));
        }

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bouton_text', array(
            'label' => __('Texte du bouton', 'custom'),
            'description' => '',
            'section' => 'aboutus',
        )));
    }
    add_action('customize_register', 'aboutus_customize');
  

    add_theme_support( 'custom-logo');


?>
