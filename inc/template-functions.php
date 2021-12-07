<?php
/**
 * Template Functions
 *
 * @package Unax Blocks
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function unax_blocks_setup()  {

 	// Adding support for featured images.
 	add_theme_support( 'post-thumbnails' );

 	// Adding support for core block visual styles.
 	add_theme_support( 'wp-block-styles' );

 	// Adding support for responsive embedded content.
 	add_theme_support( 'responsive-embeds' );

 	// Add support for editor styles.
 	add_theme_support( 'editor-styles' );

 	// Add support for custom units.
 	add_theme_support( 'custom-units' );

 	// Enqueue editor styles.
 	add_editor_style( 'dist/css/editor-style.css' );

 	// Register two nav menus
 	register_nav_menus(
 		array(
 			'primary' => __( 'Primary Navigation', 'blockbase' ),
 			'social' => __( 'Social Navigation', 'blockbase' )
 		)
 	);

 	// Add support for core custom logo.
 	add_theme_support(
 		'custom-logo',
 		array(
 			'height'      => 192,
 			'width'       => 192,
 			'flex-width'  => true,
 			'flex-height' => true,
 		)
 	);
}


/**
 * Enqueue scripts and styles.
 */
function unax_blocks_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'unax-blocks', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
