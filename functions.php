<?php

define( 'DEFAULTS', array (
  'copyright' => '© Atenea Business Corporation Agencia Digital',
  'right_prominent_text' => '¿Te podemos<br>ayudar?',
  'right_normal_text' => 'Estamos online<br>de 8:00 am a 5:00 pm',
));

function theme_init() {
    // styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // scripts
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/js/script.js',
        array ( 'jquery' ),
        NULL,
        true
    );

    // logo
    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ));

    // widgets
    register_sidebar( array(
        'name' => 'Header left',
        'id' => 'header_left',
    ) );

    // menus
    register_nav_menus( array(
      'main-menu'  => __( 'Main menu' ),
    ));
}

function customizer_settings_init($wp_customize) {

    // footer

    $wp_customize->add_setting( 'copyright', array(
        'type' => 'option',
        'default' => DEFAULTS['copyright'],
    ) );

    $wp_customize->add_setting( 'right_prominent_text', array(
        'type' => 'option',
        'default' => DEFAULTS['right_prominent_text'],
    ) );

    $wp_customize->add_setting( 'right_normal_text', array(
        'type' => 'option',
        'default' => DEFAULTS['right_normal_text'],
    ) );

    $wp_customize->add_section( 'footer' , array(
      'title' => __( 'Footer', 'themename' ),
      'priority' => 105,
    ) );

    $wp_customize->add_control( 'copyright', array(
        'label' => __( 'Copyright text' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );

    $wp_customize->add_control( 'right_prominent_text', array(
        'label' => __( 'Right prominent text' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );

    $wp_customize->add_control( 'right_normal_text', array(
        'label' => __( 'Right normal text' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );
}

add_action( 'init', 'theme_init' );
add_action('customize_register', 'customizer_settings_init');
