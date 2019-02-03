<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.min.css', array(), '1.1', 'all');

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/main.css', array(), '1.1', 'all');

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/scripts.min.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );