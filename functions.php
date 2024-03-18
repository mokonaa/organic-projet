<?php
    function mytheme_enqueue_styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


    function newsletter_customize($wp_customize)
    {
        $wp_customize->add_section('newsletter', array(
            'title' => __('Newsletter', 'custom'),
            'description' => 'Vous pouvez changer ici les informations de ce bloc',
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
            'description' => 'L\'image doit être en gif, png, jpg',
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
            'title' => __('Bannière', 'custom'),
            'description' => 'Vous pouvez changer ici les informations de la bannière',
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
            'section' => 'banner',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_desc', array(
            'label' => __('Description', 'custom'),
            'section' => 'banner',
        )));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
            'label' => __('Image', 'custom'),
            'section' => 'banner',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_urlTxt', array(
            'label' => __('Texte (call to action bouton)', 'custom'),
            'section' => 'banner',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_url', array(
            'label' => __('Lien Url', 'custom'),
            'section' => 'banner',
        )));
    }
    add_action('customize_register', 'banner_customize');


    // PROMOTIONS EDITING
    function promotions_customize($wp_customize) {

        $wp_customize->add_section('promotions', array(
            'title' => __('Promotions', 'custom'),
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
                'section' => 'promotions',
            )));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_title'.$i, array(
                'label' => __('Promotion '.($i+1).' Titre', 'custom'),
                'section' => 'promotions',
            )));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'promotion_desc'.$i, array(
                'label' => __('Promotion '.($i+1).' Description', 'custom'),
                'section' => 'promotions',
            )));
        }
    }
    add_action('customize_register', 'promotions_customize');
    

    // ABOUT US EDITING
    function aboutus_customize($wp_customize) {

        $wp_customize->add_section('aboutus', array(
            'title' => __('À propos de nous', 'custom'),
            'description' => 'Vous pouvez changer ici les informations sur les promotions',
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
            'description' => 'L\'image doit être en gif, png, jpg',
            'section' => 'aboutus',
        )));
        
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_description', array(
            'label' => __('Petite description de la section', 'custom'),
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_title', array(
            'label' => __('Titre de la section', 'custom'),
            'section' => 'aboutus',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_text', array(
            'label' => __('Paragraphe', 'custom'),
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
                'section' => 'aboutus',
            )));
    
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'aboutus_bloc'.($j+1).'description', array(
                'label' => __('Description du bloc '.($j+1), 'custom'),
                'section' => 'aboutus',
            )));
    
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aboutusbloc'.($j+1).'_image', array(
                'label' => __('Pictos associées au bloc '.($j+1), 'custom'),
                'section' => 'aboutus',
            )));
        }

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bouton_text', array(
            'label' => __('Texte du bouton', 'custom'),
            'section' => 'aboutus',
        )));
    }
    add_action('customize_register', 'aboutus_customize');
  

    add_theme_support( 'custom-logo');

// Menu de navigation
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
  }
add_action( 'after_setup_theme', 'register_my_menu' );


// Personnalisation du logo dans le menu de navigation
function nav_logo_customize($wp_customize) {
    $wp_customize->add_section('logo', array(
        'title' => __('Logo', 'custom'),
        'description' => 'Ici, vous pouvez sélectionner votre logo',
        'priority' => 30,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting("logo_img", array(
        "capability" => "edit_theme_options",
        "type" => "theme_mod",
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_img', array(
        'label' => __('Logo Image', 'custom'),
        'description' => 'Le logo doit être en gif, png, jpg',
        'section' => 'logo',
    )));
}
add_action('customize_register', 'nav_logo_customize');


// Personnalisation des infos (contact + description + réseaux sociaux) dans le footer
function footer_customize($wp_customize) {
    $wp_customize->add_section('Footer', array(
        'title' => __('Footer', 'custom'),
        'description' => 'Vous pouvez renseigner ici les informations de contact',
        'priority' => 30,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_setting('footer_email', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('footer_phone', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('footer_address', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('footer_description', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('social-instagram', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('social-facebook', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('social-twitter', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('social-pinterest', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_email', array(
        'label' => __('Email', 'custom'),
        'description' => 'Le champ doit être valide',
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_phone', array(
        'label' => __('Téléphone', 'custom'),
        'description' => 'Le champ doit être valide',
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_address', array(
        'label' => __('Adresse', 'custom'),
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_description', array(
        'label' => __('Description', 'custom'),
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social-instagram', array(
        'label' => __('Instagram', 'custom'),
        'description' => 'Le champ doit être une URL',
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social-facebook', array(
        'label' => __('Facebook', 'custom'),
        'description' => 'Le champ doit être une URL',
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social-twitter', array(
        'label' => __('Twitter', 'custom'),
        'description' => 'Le champ doit être une URL',
        'section' => 'Footer',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social-pinterest', array(
        'label' => __('Pinterest', 'custom'),
        'description' => 'Le champ doit être une URL',
        'section' => 'Footer',
    )));
}
add_action('customize_register', 'footer_customize');


// Liens utiles du footer
function register_useful_links(){
    register_nav_menu( 'footer', 'Liens utiles' );
  }
add_action( 'after_setup_theme', 'register_useful_links' );


// Personnalisation du bloc réassurance eco-friendly
function eco_friendly_customize($wp_customize) {
    $wp_customize->add_section('Eco-friendly', array(
        'title' => __('Réassurance eco-friendly', 'custom'),
        'description' => 'Vous pouvez modifier ici les informations concernant la réassurance eco-friendly',
        'priority' => 30,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_setting('eco_friendly_img', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_desc', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_title', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_subtitle_1', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_text_1', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_subtitle_2', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_text_2', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_subtitle_3', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_setting('eco_friendly_text_3', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'eco_friendly_img', array(
        'label' => __('Image', 'custom'),
        'description' => 'Le champ est requis',
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_desc', array(
        'label' => __('Description', 'custom'),
        'description' => 'Le champ est requis',
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_title', array(
        'label' => __('Titre', 'custom'),
        'description' => 'Le champ est requis',
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_subtitle_1', array(
        'label' => __('Premier sous-titre', 'custom'),
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_text_1', array(
        'label' => __('Première paragraphe', 'custom'),
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_subtitle_2', array(
        'label' => __('Deuxième sous-titre', 'custom'),
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_text_2', array(
        'label' => __('Deuxième paragraphe', 'custom'),
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_subtitle_3', array(
        'label' => __('Troisième sous-titre', 'custom'),
        'section' => 'Eco-friendly',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eco_friendly_text_3', array(
        'label' => __('Troisième paragraphe', 'custom'),
        'section' => 'Eco-friendly',
    )));
}
add_action('customize_register', 'eco_friendly_customize');
