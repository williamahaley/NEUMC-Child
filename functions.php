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

if ( ! function_exists( 'neumc_password_form' ) ){

	function neumc_password_form( $output ){

		return str_replace('below:', 'below:<br/>Contact church office at <a href="mailto:office@neumc.com">office@neumc.com</a> for password.', $output );

	}

}

add_filter( 'the_password_form', 'neumc_password_form' );