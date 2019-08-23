<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'kids_love_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','kids-love' ),
	'description'       => esc_html__( 'Archive section options.', 'kids-love' ),
	'panel'             => 'kids_love_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'kids_love_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'kids-love' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'kids-love' ),
	'section'           => 'kids_love_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'kids_love_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'kids-love' ),
	'section'           => 'kids_love_archive_section',
	'on_off_label' 		=> kids_love_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'kids_love_sanitize_switch_control',
) );

$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'kids-love' ),
	'section'           => 'kids_love_archive_section',
	'on_off_label' 		=> kids_love_hide_options(),
) ) );
