<?php
//Theme support
function custom_theme_support() {
    // Add dynamic title
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'custom_theme_support' );


// Add styles and scripts
function custom_theme_scripts() {
    
    // Enqueue CSS file
    wp_enqueue_style( 'styling', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
    
    // Enqueue JavaScript file
    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0', true );

    // Enqueue Google fonts
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Poppins&display=swap' );

    // Enqueue FontAwesome
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' );

    //Enqueue AOS libray

    //CSS
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );

    //JavaScript
    wp_enqueue_script( 'aos-script', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );
    wp_add_inline_script( 'aos-script', 'AOS.init();' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );


// Menu Support (basic)
function custom_theme_menus() {

    $locations = array(
        "primary" => "Main Navigation",
        "hero" => "Hero Social Icons",
        "footer" => "Footer Social Icons"
    );
    register_nav_menus($locations);
}

add_action('init', 'custom_theme_menus');


