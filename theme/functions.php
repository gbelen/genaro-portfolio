<?php
/**
 * Genaro theme functions.
 *
 * @package Genaro
 */

defined( 'ABSPATH' ) || exit;

/**
 * Favicon from the theme's SVG isologo.
 *
 * WordPress' Site Icon setting doesn't accept SVG, so we print the tag ourselves.
 * If a Site Icon is set in the admin, that one wins.
 */
function genaro_favicon() {
	if ( has_site_icon() ) {
		return;
	}
	printf(
		'<link rel="icon" href="%s" type="image/svg+xml">' . "\n",
		esc_url( get_theme_file_uri( 'assets/images/isologo.svg' ) )
	);
}
add_action( 'wp_head', 'genaro_favicon' );
