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

	/**
	 * Section Contacts.
	 */
	$wp_customize->add_section(
		'unax_section_contacts',
		array(
			'title'       => esc_html__( 'Contacts', 'unax' ),
			'description' => esc_html__( 'Use contact details with Contacts Widget. Blank fields not rendered.', 'unax' ),
			'priority'    => 20,
		)
	);

	// Phone.
	$wp_customize->add_setting(
		'unax_contact_phone',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_phone',
			[
				'label'    => __( 'Phone', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);

	// Email.
	$wp_customize->add_setting(
		'unax_contact_email',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_email',
			[
				'label'    => __( 'Email', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);

	// Facebook page.
	$wp_customize->add_setting(
		'unax_contact_facebook_page',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_facebook_page',
			[
				'label'    => __( 'Facebook page', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);

	// Youtube.
	$wp_customize->add_setting(
		'unax_contact_youtube',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_youtube',
			[
				'label'    => __( 'Youtube', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);

	// LinkedIn.
	$wp_customize->add_setting(
		'unax_contact_linkedin',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_linkedin',
			[
				'label'    => __( 'LinkedIn', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);

	// Address.
	$wp_customize->add_setting(
		'unax_contact_address',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_address',
			[
				'label'    => __( 'Address', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);

	// Working hours.
	$wp_customize->add_setting(
		'unax_contact_working_hours',
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'unax_contact_working_hours',
			[
				'label'    => __( 'Working hours', 'unax' ),
				'section'  => 'unax_section_contacts',
			]
		)
	);
}
