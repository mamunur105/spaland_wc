<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package spaland
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function spaland_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'spaland_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function spaland_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'spaland_pingback_header' );


function main_menu_walker(){
	if ( has_nav_menu( 'menu-1' ) ) {
		wp_nav_menu( array(
			'theme_location' 	=> 'menu-1',
			'items_wrap' 		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'container'			=> 'div',
			'container_id'		=>'',
			'container_class'	=> 'navbar-collapse collapse clearfix',
			'menu_id'        	=> '',
			'menu_class'        => 'navigation clearfix',
			'walker'			=> new Selective_Walker(),
		) );
	}
}


// codester fream work error handling  
function theme_options($idname){
	if(function_exists('cs_get_option')){
		return cs_get_option($idname);
	}else{
		return false ;
	}
}