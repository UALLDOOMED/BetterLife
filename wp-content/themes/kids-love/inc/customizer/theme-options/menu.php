<?php
/**
 * Menu options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'kids_love_menu', array(
	'title'             => esc_html__('Header Menu','kids-love'),
	'description'       => esc_html__( 'Header Menu options.', 'kids-love' ),
	'panel'             => 'nav_menus',
) );

// top bar menu visible
$wp_customize->add_setting( 'kids_love_theme_options[menu_social_enable]',
	array(
		'default'       	=> $options['menu_social_enable'],
		'sanitize_callback' => 'kids_love_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[menu_social_enable]',
    array(
		'label'      		=> esc_html__( 'Display Social Menu', 'kids-love' ),
		'description'       => sprintf( '%1$s <a class="topbar-menu-trigger" href="#"> %2$s </a> %3$s', esc_html__( 'Note: To show topbar menu.', 'kids-love' ), esc_html__( 'Click Here', 'kids-love' ), esc_html__( 'to create menu', 'kids-love' ) ),
		'section'    		=> 'kids_love_menu',
		'on_off_label' 		=> kids_love_switch_options(),
    )
) );