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

?>