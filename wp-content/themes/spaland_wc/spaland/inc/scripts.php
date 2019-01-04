<?php

/**
 * Enqueue scripts and styles.
 */
function spaland_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css' );
	
	wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_style( 'color-switcher-design', get_template_directory_uri() . '/css/color-switcher-design.css' );
	wp_enqueue_style( 'color-default-theme', get_template_directory_uri() . '/css/color-themes/default-theme.css' );
	wp_enqueue_style( 'spaland-style', get_stylesheet_uri() );



	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'', true );

	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'),'', true );

	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'),'', true );

	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.js', array('jquery'),'', true );

	wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/appear.js', array('jquery'),'', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'),'', true );

	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.js', array('jquery'),'', true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'),'', true );

	wp_enqueue_script( 'color-settings', get_template_directory_uri() . '/js/color-settings.js', array('jquery'),'', true );

	wp_enqueue_script( 'spaland-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'spaland-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'spaland_scripts');
