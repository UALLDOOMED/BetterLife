<?php
/**
 * Introduction Section options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add Introduction section
$wp_customize->add_section( 'kids_love_introduction_section', array(
	'title'             => esc_html__( 'Introduction','kids-love' ),
	'description'       => esc_html__( 'Introduction Section options.', 'kids-love' ),
	'panel'             => 'kids_love_front_page_panel',
) );

// Introduction content enable control and setting
$wp_customize->add_setting( 'kids_love_theme_options[introduction_section_enable]', array(
	'default'			=> 	$options['introduction_section_enable'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[introduction_section_enable]', array(
	'label'             => esc_html__( 'Introduction Section Enable', 'kids-love' ),
	'section'           => 'kids_love_introduction_section',
	'on_off_label' 		=> kids_love_switch_options(),
) ) );

// introduction pages drop down chooser control and setting
$wp_customize->add_setting( 'kids_love_theme_options[introduction_content_page]', array(
	'sanitize_callback' => 'kids_love_sanitize_page',
) );

$wp_customize->add_control( new Kids_Love_Dropdown_Chooser( $wp_customize, 'kids_love_theme_options[introduction_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'kids-love' ),
	'section'           => 'kids_love_introduction_section',
	'choices'			=> kids_love_page_choices(),
	'active_callback'	=> 'kids_love_is_introduction_section_enable',
) ) );

// introduction btn title setting and control
$wp_customize->add_setting( 'kids_love_theme_options[introduction_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['introduction_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'kids_love_theme_options[introduction_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'kids-love' ),
	'section'        	=> 'kids_love_introduction_section',
	'active_callback' 	=> 'kids_love_is_introduction_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'kids_love_theme_options[introduction_btn_title]', array(
		'selector'            => '#introduction-section a.btn',
		'settings'            => 'kids_love_theme_options[introduction_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'kids_love_introduction_btn_title_partial',
    ) );
}
