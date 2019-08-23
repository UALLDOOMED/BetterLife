<?php
/**
 * Service Section options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add Service section
$wp_customize->add_section( 'kids_love_service_section', array(
	'title'             => esc_html__( 'Services','kids-love' ),
	'description'       => esc_html__( 'Services Section options.', 'kids-love' ),
	'panel'             => 'kids_love_front_page_panel',
) );

// Service content enable control and setting
$wp_customize->add_setting( 'kids_love_theme_options[service_section_enable]', array(
	'default'			=> 	$options['service_section_enable'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[service_section_enable]', array(
	'label'             => esc_html__( 'Service Section Enable', 'kids-love' ),
	'section'           => 'kids_love_service_section',
	'on_off_label' 		=> kids_love_switch_options(),
) ) );

// service title setting and control
$wp_customize->add_setting( 'kids_love_theme_options[service_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['service_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'kids_love_theme_options[service_title]', array(
	'label'           	=> esc_html__( 'Title', 'kids-love' ),
	'section'        	=> 'kids_love_service_section',
	'active_callback' 	=> 'kids_love_is_service_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'kids_love_theme_options[service_title]', array(
		'selector'            => '#our-services .section-header h2.section-title',
		'settings'            => 'kids_love_theme_options[service_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'kids_love_service_title_partial',
    ) );
}

for ( $i = 1; $i <= 3; $i++ ) :

	// service note control and setting
	$wp_customize->add_setting( 'kids_love_theme_options[service_content_icon_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( new Kids_Love_Icon_Picker( $wp_customize, 'kids_love_theme_options[service_content_icon_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Icon %d', 'kids-love' ), $i ),
		'section'           => 'kids_love_service_section',
		'active_callback'	=> 'kids_love_is_service_section_enable',
	) ) );

	// service pages drop down chooser control and setting
	$wp_customize->add_setting( 'kids_love_theme_options[service_content_page_' . $i . ']', array(
		'sanitize_callback' => 'kids_love_sanitize_page',
	) );

	$wp_customize->add_control( new Kids_Love_Dropdown_Chooser( $wp_customize, 'kids_love_theme_options[service_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'kids-love' ), $i ),
		'section'           => 'kids_love_service_section',
		'choices'			=> kids_love_page_choices(),
		'active_callback'	=> 'kids_love_is_service_section_enable',
	) ) );

	// service hr setting and control
	$wp_customize->add_setting( 'kids_love_theme_options[service_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Kids_Love_Customize_Horizontal_Line( $wp_customize, 'kids_love_theme_options[service_hr_'. $i .']',
		array(
			'section'         => 'kids_love_service_section',
			'active_callback' => 'kids_love_is_service_section_enable',
			'type'			  => 'hr'
	) ) );
endfor;
