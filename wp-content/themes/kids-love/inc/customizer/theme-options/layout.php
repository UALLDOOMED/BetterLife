<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'kids_love_layout', array(
	'title'               => esc_html__('Layout','kids-love'),
	'description'         => esc_html__( 'Layout section options.', 'kids-love' ),
	'panel'               => 'kids_love_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[site_layout]', array(
	'sanitize_callback'   => 'kids_love_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Kids_Love_Custom_Radio_Image_Control ( $wp_customize, 'kids_love_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'kids-love' ),
	'section'             => 'kids_love_layout',
	'choices'			  => kids_love_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'kids_love_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Kids_Love_Custom_Radio_Image_Control ( $wp_customize, 'kids_love_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'kids-love' ),
	'section'             => 'kids_love_layout',
	'choices'			  => kids_love_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'kids_love_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Kids_Love_Custom_Radio_Image_Control ( $wp_customize, 'kids_love_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'kids-love' ),
	'section'             => 'kids_love_layout',
	'choices'			  => kids_love_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'kids_love_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Kids_Love_Custom_Radio_Image_Control( $wp_customize, 'kids_love_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'kids-love' ),
	'section'             => 'kids_love_layout',
	'choices'			  => kids_love_sidebar_position(),
) ) );