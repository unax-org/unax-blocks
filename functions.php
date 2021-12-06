<?php

if ( ! function_exists( 'unax_blocks_support' ) ) :
	function unax_blocks_support()  {

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
		add_editor_style( 'dist/editor-style.css' );
	}
	add_action( 'after_setup_theme', 'unax_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function unax_blocks_scripts() {
	// Enqueue normalize.
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1' );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'unax-blocks-style', get_template_directory_uri() . '/style.css', array( 'normalize' ), wp_get_theme()->get( 'Version' ) );

}

add_action( 'wp_enqueue_scripts', 'unax_blocks_scripts' );
