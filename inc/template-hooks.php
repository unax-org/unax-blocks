<?php
/**
 * Template hooks
 */

add_action( 'after_setup_theme', 'leaderland_support' );
add_action( 'wp_enqueue_scripts', 'leaderland_styles' );
add_action( 'admin_init', 'leaderland_editor_styles' );
add_action( 'wp_head', 'leaderland_preload_webfonts' );
