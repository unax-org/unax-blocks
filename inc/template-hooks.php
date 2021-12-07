<?php
/**
 * Template hooks.
 *
 * @package Unax
 */

// Theme setup.
add_action( 'after_setup_theme', 'unax_blocks_setup' );
add_action( 'wp_enqueue_scripts', 'unax_blocks_scripts' );

// Customizer.
add_action( 'customize_register', 'unax_blocks_customize_register' );
