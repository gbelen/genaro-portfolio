<?php
/**
 * Genaro theme functions.
 *
 * @package Genaro
 */

defined( 'ABSPATH' ) || exit;

/**
 * Component styles (cards, timeline, chips...). Tokens stay in theme.json.
 *
 * The version is the file's modification time, so browsers never keep a stale copy.
 */
function genaro_enqueue_styles() {
	$path = 'assets/css/theme.css';
	wp_enqueue_style(
		'genaro-theme',
		get_theme_file_uri( $path ),
		array(),
		(string) filemtime( get_theme_file_path( $path ) )
	);
}
add_action( 'wp_enqueue_scripts', 'genaro_enqueue_styles' );

/**
 * Same styles inside the block editor, so it looks like the front end.
 */
function genaro_editor_styles() {
	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'genaro_editor_styles' );

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
