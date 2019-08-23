<?php
/**
* Homepage (Static ) options
*
* @package Theme Palace
* @subpackage Kids Love
* @since Kids Love 1.0.0
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'kids_love_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content'],
) );

$wp_customize->add_control( 'kids_love_theme_options[enable_frontpage_content]', array(
	'label'       	=> esc_html__( 'Enable Content', 'kids-love' ),
	'description' 	=> esc_html__( 'Check to enable content on static front page only.', 'kids-love' ),
	'section'     	=> 'static_front_page',
	'type'        	=> 'checkbox',
) );