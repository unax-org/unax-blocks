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
	add_action( 'after_setup_theme', 'unax_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function unax_blocks_scripts() {
	// Normalize.
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/dist/css/normalize.css', array(), '8.0.1' );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'unax-blocks', get_template_directory_uri() . '/style.css', array( 'normalize' ), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'unax_blocks_scripts' );
