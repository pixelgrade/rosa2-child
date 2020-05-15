<?php
/**
 * Rosa 2 Child functions and definitions
 *
 * Bellow you will find several ways to tackle the enqueue of static resources/files
 * It depends on the amount of customization you want to do
 * If you either wish to simply overwrite/add some CSS rules or JS code
 * Or if you want to replace certain files from the parent with your own (like style.css or main.js)
 *
 * @package Rosa2Child
 */
/**
 * Setup Rosa 2 Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function rosa2_child_theme_setup() {
	load_child_theme_textdomain( 'rosa2-child-theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'rosa2_child_theme_setup' );
/**
 *
 * 1. Add a Child Theme "style.css" file
 * ----------------------------------------------------------------------------
 *
 * If you want to add static resources files from the child theme, use the
 * example function written below.
 *
 */
function rosa2_child_enqueue_styles() {
	// Here we are adding the child style.css while still retaining
	// all of the parents assets (style.css, JS files, etc)
	wp_enqueue_style( 'rosa-child-style',
		get_stylesheet_uri(),
		array('rosa2-theme') //make sure the the child's style.css comes after the parents so you can overwrite rules
	);
}
add_action( 'wp_enqueue_scripts', 'rosa2_child_enqueue_styles' );
