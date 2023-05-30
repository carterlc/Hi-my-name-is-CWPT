<?php

// Theme support

add_theme_support( 'title-tag' );


// Add styles and scripts
function custom_theme_scripts() {
    // Enqueue CSS file
    wp_enqueue_style( 'styling', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    
    // Enqueue JavaScript file
    wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js', array(), '1.0', true );

    // Enqueue rest of links
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Poppins&display=swap' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );


// Menu Support (basic)

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'social-menu' => __( 'Social Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );

