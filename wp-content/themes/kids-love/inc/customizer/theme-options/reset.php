<?php
/**
 * Reset options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'kids_love_reset_section', array(
	'title'             => esc_html__('Reset all settings','kids-love'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'kids-love' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'kids_love_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'kids_love_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'kids_love_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'kids-love' ),
	'section'           => 'kids_love_reset_section',
	'type'              => 'checkbox',
) );
