<?php
/**
 * Breadcrumb options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

$wp_customize->add_section( 'kids_love_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','kids-love' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'kids-love' ),
	'panel'             => 'kids_love_theme_options_panel',
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[breadcrumb_enable]', array(
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
	'default'          	=> $options['breadcrumb_enable'],
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'kids-love' ),
	'section'          	=> 'kids_love_breadcrumb',
	'on_off_label' 		=> kids_love_switch_options(),
) ) );

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator'],
) );

$wp_customize->add_control( 'kids_love_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Separator', 'kids-love' ),
	'active_callback' 	=> 'kids_love_is_breadcrumb_enable',
	'section'          	=> 'kids_love_breadcrumb',
) );
