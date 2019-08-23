<?php
/**
 * pagination options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'kids_love_pagination', array(
	'title'               => esc_html__('Pagination','kids-love'),
	'description'         => esc_html__( 'Pagination section options.', 'kids-love' ),
	'panel'               => 'kids_love_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'kids-love' ),
	'section'             => 'kids_love_pagination',
	'on_off_label' 		=> kids_love_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'kids_love_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'kids_love_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'kids-love' ),
	'section'             => 'kids_love_pagination',
	'type'                => 'select',
	'choices'			  => kids_love_pagination_options(),
	'active_callback'	  => 'kids_love_is_pagination_enable',
) );
