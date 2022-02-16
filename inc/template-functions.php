<?php
/**
 * Template functions
 */


/**
* Sets up theme defaults and registers support for various WordPress features.
*
* @return void
*/
function leaderland_support() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );
}


/**
 * Enqueue styles.
 *
 * @return void
 */
function leaderland_styles() {
	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$version_string = is_string( $theme_version ) ? $theme_version : false;
	wp_register_style(
		'leaderland-style',
		get_template_directory_uri() . '/assets/css/theme.min.css',
		array(),
		$version_string
	);

	// Add styles inline.
	wp_add_inline_style( 'leaderland-style', leaderland_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'leaderland-style' );
}


/**
 * Enqueue editor styles.
 *
 * @return void
 */
function leaderland_editor_styles() {
	// Add styles inline.
	wp_add_inline_style( 'wp-block-library', leaderland_get_font_face_styles() );
}


/**
 * Get font face styles.
 * Called by functions leaderland_styles() and leaderland_editor_styles() above.
 *
 * @return string
 */
function leaderland_get_font_face_styles() {
	return "
	@font-face{
		font-family: 'Source Serif Pro';
		font-weight: 200 900;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
	}

	@font-face{
		font-family: 'Source Serif Pro';
		font-weight: 200 900;
		font-style: italic;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
	}
	";
}


/**
 * Preloads the main web font to improve performance.
 *
 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
 * at all.
 *
 * @return void
 */
function leaderland_preload_webfonts() {
	?>
	<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
	<?php
}
