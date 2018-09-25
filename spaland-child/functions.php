<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' ,11);
function my_theme_enqueue_styles() {
    $parent_style = 'spaland-style'; 
	wp_dequeue_style( $parent_style );
    wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( $parent_style, get_stylesheet_directory_uri());
}

