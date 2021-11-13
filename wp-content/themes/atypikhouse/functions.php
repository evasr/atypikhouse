<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('topbar-menu',__( 'Top Bar Menu' ));
    register_nav_menu('footer-menu',__( 'Top Bar Menu' ));
}
add_action( 'init', 'register_my_menu' );

function capitaine_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery');
    
    // Déclarer le JS
	// wp_enqueue_script( 
    //     'capitaine', 
    //     get_template_directory_uri() . '/js/script.js', 
    //     array( 'jquery' ), 
    //     '1.0', 
    //     true
    // );
    
    // Déclarer style.css à la racine du thème
    // wp_enqueue_style( 
    //     'capitaine',
    //     get_stylesheet_uri(), 
    //     array(), 
    //     '1.0'
    // );
  	
    // Main Style
    wp_enqueue_style( 
        'main-style', 
        get_template_directory_uri() . '/assets/css/main.css',
        array(), 
        '1.0'
    );

    // Header style
    wp_enqueue_style( 
        'header-style', 
        get_template_directory_uri() . '/assets/css/header.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );

require 'methods/debug.php';
