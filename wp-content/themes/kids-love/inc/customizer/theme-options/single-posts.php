<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'kids_love_single_post_section', array(
	'title'             => esc_html__( 'Single Post','kids-love' ),
	'description'       => esc_html__( 'Options to change the single posts globally.', 'kids-love' ),
	'panel'             => 'kids_love_theme_options_panel',
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[single_post_hide_date]', array(
	'default'           => $options['single_post_hide_date'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[single_post_hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'kids-love' ),
	'section'           => 'kids_love_single_post_section',
	'on_off_label' 		=> kids_love_hide_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[single_post_hide_author]', array(
	'default'           => $options['single_post_hide_author'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[single_post_hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'kids-love' ),
	'section'           => 'kids_love_single_post_section',
	'on_off_label' 		=> kids_love_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[single_post_hide_category]', array(
	'default'           => $options['single_post_hide_category'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[single_post_hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'kids-love' ),
	'section'           => 'kids_love_single_post_section',
	'on_off_label' 		=> kids_love_hide_options(),
) ) );

// Archive tag category setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[single_post_hide_tags]', array(
	'default'           => $options['single_post_hide_tags'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[single_post_hide_tags]', array(
	'label'             => esc_html__( 'Hide Tag', 'kids-love' ),
	'section'           => 'kids_love_single_post_section',
	'on_off_label' 		=> kids_love_hide_options(),
) ) );
