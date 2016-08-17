<?php
/**
 * bethlehem child fuctions
 *
 * @package bethlehem-child
 */

/**
 * Note: You can add any custom code here. You are using child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */

// Optimizing Contact Form 7
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function bethlehem_enqueue_cf7() {
	if( is_page( 'contact' ) ) {
		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
		    wpcf7_enqueue_scripts();
		}

		if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
		    wpcf7_enqueue_styles();
		}
	}
}

add_action( 'wp_head', 'bethlehem_enqueue_cf7' );

// Do not load Child Theme Style.css
#add_filter( 'bethlehem_load_child_style', '__return_false' );