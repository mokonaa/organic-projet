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


    // PROMOTIONS EDITING
    function promotions_customize($wp_customize) {

        $wp_customize->add_section('promotions', array(
            'title' => __('Promotions', 'custom'),
            'description' => 'Here you can change promotions options',
            'priority' => 30,
            'capability' => 'edit_theme_options'
        ));


        // Promo 1
        $wp_customize->add_setting('promotion_image0', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('promotion_title0', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('promotion_desc0', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promotion_image0', array(
            'label' => __('Promotion 1 Image', 'custom'),
            'description' => 'Promotion image has to be in gif, png, jpg.',
            'section' => 'promotions',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_title0', array(
            'label' => __('Promotion 1 Title', 'custom'),
            'description' => 'Promotion Title must be valid.',
            'section' => 'promotions',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_desc0', array(
            'label' => __('Promotion 1 Description', 'custom'),
            'description' => 'Promotion Description must be valid.',
            'section' => 'promotions',
        )));






        // Promo 2
        $wp_customize->add_setting('promotion_image1', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('promotion_title1', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('promotion_desc1', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promotion_image1', array(
            'label' => __('Promotion 2 Image', 'custom'),
            'description' => 'Promotion image has to be in gif, png, jpg.',
            'section' => 'promotions',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_title1', array(
            'label' => __('Promotion 2 Title', 'custom'),
            'description' => 'Promotion Title must be valid.',
            'section' => 'promotions',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_desc1', array(
            'label' => __('Promotion 2 Description', 'custom'),
            'description' => 'Promotion Description must be valid.',
            'section' => 'promotions',
        )));



        /*
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
                'label' => __('Promotion Image', 'custom'),
                'description' => 'Promotion image has to be in gif, png, jpg.',
                'section' => 'promotions',
            )));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_title'.$i, array(
                'label' => __('Promotion Title', 'custom'),
                'description' => 'Promotion Title must be valid.',
                'section' => 'promotions',
            )));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_desc'.$i, array(
                'label' => __('Promotion Description', 'custom'),
                'description' => 'Promotion Description must be valid.',
                'section' => 'promotions',
            )));
        }//*/
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

        $wp_customize->add_setting('aboutus_bloc1description', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutus_bloc1title', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutusbloc1_image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));


        $wp_customize->add_setting('aboutus_bloc2description', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutus_bloc2title', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_setting('aboutusbloc2_image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ));


        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutus_fondimage', array(
            'label' => __('A propos de nous Fond', 'custom'),
            'description' => 'Image has to be in gif, png, jpg.',
            'section' => 'aboutus',
        )));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_description', array(
            'label' => __('Description', 'custom'),
            'description' => 'Promotion Description must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_title', array(
            'label' => __('Titre', 'custom'),
            'description' => ' must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_text', array(
            'label' => __('Paragraphe', 'custom'),
            'description' => ' must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc1description', array(
            'label' => __('Bloc 1 Description', 'custom'),
            'description' => ' must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc1title', array(
            'label' => __('Bloc 1 Titre', 'custom'),
            'description' => ' must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutusbloc1_image', array(
            'label' => __('A propos de nous Bloc 1 Image', 'custom'),
            'description' => 'Image has to be in gif, png, jpg.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc2description', array(
            'label' => __('Bloc 2 Description', 'custom'),
            'description' => ' must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc2title', array(
            'label' => __('Bloc 2 Titre', 'custom'),
            'description' => ' must be valid.',
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutusbloc2_image', array(
            'label' => __('A propos de nous Bloc 2 Image', 'custom'),
            'description' => 'Image has to be in gif, png, jpg.',
            'section' => 'aboutus',
        )));



    }
    add_action('customize_register', 'aboutus_customize');
  

    add_theme_support( 'custom-logo');


?>
