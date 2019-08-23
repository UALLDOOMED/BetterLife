<?php
/**
 * Hero Content Section options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add Hero Content section
$wp_customize->add_section( 'kids_love_hero_content_section', array(
	'title'             => esc_html__( 'Hero Content','kids-love' ),
	'description'       => esc_html__( 'Hero Content Section options.', 'kids-love' ),
	'panel'             => 'kids_love_front_page_panel',
) );

// Hero Content content enable control and setting
$wp_customize->add_setting( 'kids_love_theme_options[hero_content_section_enable]', array(
	'default'			=> 	$options['hero_content_section_enable'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[hero_content_section_enable]', array(
	'label'             => esc_html__( 'Hero Content Section Enable', 'kids-love' ),
	'section'           => 'kids_love_hero_content_section',
	'on_off_label' 		=> kids_love_switch_options(),
) ) );

// hero_content pages drop down chooser control and setting
$wp_customize->add_setting( 'kids_love_theme_options[hero_content_content_page]', array(
	'sanitize_callback' => 'kids_love_sanitize_page',
) );

$wp_customize->add_control( new Kids_Love_Dropdown_Chooser( $wp_customize, 'kids_love_theme_options[hero_content_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'kids-love' ),
	'section'           => 'kids_love_hero_content_section',
	'choices'			=> kids_love_page_choices(),
	'active_callback'	=> 'kids_love_is_hero_content_section_enable',
) ) );


// hero_content btn title setting and control
$wp_customize->add_setting( 'kids_love_theme_options[hero_content_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['hero_content_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'kids_love_theme_options[hero_content_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'kids-love' ),
	'section'        	=> 'kids_love_hero_content_section',
	'active_callback' 	=> 'kids_love_is_hero_content_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'kids_love_theme_options[hero_content_btn_title]', array(
		'selector'            => '#hero-section a.btn',
		'settings'            => 'kids_love_theme_options[hero_content_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'kids_love_hero_content_btn_title_partial',
    ) );
}
