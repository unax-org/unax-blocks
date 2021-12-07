<?php
/**
 * Unax Theme Customizer
 *
 * @package Unax
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function unax_blocks_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Site title and description selective refresh.
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'unax_blocks_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'unax_blocks_customize_partial_blogdescription',
			)
		);
	}

	// Footer credits.
	$wp_customize->add_setting(
		'unax_blocks_display_footer_credits',
		array(
			'default' => '1',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_display_footer_credits',
			[
				'label'    => __( 'Display footer credits.', 'unax' ),
				'priority' => 50,
				'type'     => 'checkbox',
				'section'  => 'title_tagline',
			]
		)
	);

	// Site title in footer.
	$wp_customize->add_setting(
		'unax_blocks_display_footer_title',
		array(
			'default' => '1',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_display_footer_title',
			[
				'label'    => __( 'Display site title in footer.', 'unax' ),
				'priority' => 51,
				'type'     => 'checkbox',
				'section'  => 'title_tagline',
			]
		)
	);

	/**
	 * Section Theme settings.
	 */
	$wp_customize->add_section(
		'unax_blocks_common_settings',
		array(
			'title'      => esc_html__( 'Theme Settings', 'unax' ),
			'priority'   => 120,
		)
	);

	/**
	 * Section Contacts.
	 */
	$wp_customize->add_section(
		'unax_blocks_section_contacts',
		array(
			'title'       => esc_html__( 'Contacts', 'unax' ),
			'description' => esc_html__( 'Use contact details with Contacts Widget. Blank fields not rendered.', 'unax' ),
			'priority'    => 20,
		)
	);

	// Phone.
	$wp_customize->add_setting(
		'unax_blocks_contact_phone',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_phone',
			[
				'label'    => __( 'Phone', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// Email.
	$wp_customize->add_setting(
		'unax_blocks_contact_email',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_email',
			[
				'label'    => __( 'Email', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// Facebook page.
	$wp_customize->add_setting(
		'unax_blocks_contact_facebook_page',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_facebook_page',
			[
				'label'    => __( 'Facebook page', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// Youtube.
	$wp_customize->add_setting(
		'unax_blocks_contact_youtube',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_youtube',
			[
				'label'    => __( 'Youtube', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// LinkedIn.
	$wp_customize->add_setting(
		'unax_blocks_contact_linkedin',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_linkedin',
			[
				'label'    => __( 'LinkedIn', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// Skype.
	$wp_customize->add_setting(
		'unax_blocks_contact_skype',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_skype',
			[
				'label'    => __( 'Skype', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// Address.
	$wp_customize->add_setting(
		'unax_blocks_contact_address',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_address',
			[
				'label'    => __( 'Address', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);

	// Working hours.
	$wp_customize->add_setting(
		'unax_blocks_contact_working_hours',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_blocks_contact_working_hours',
			[
				'label'    => __( 'Working hours', 'unax' ),
				'section'  => 'unax_blocks_section_contacts',
			]
		)
	);
}
