<?php
/**
 * Footer options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

// Footer Section
$wp_customize->add_section( 'kids_love_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer Options', 'kids-love' ),
		'priority'   			=> 900,
		'panel'      			=> 'kids_love_theme_options_panel',
	)
);

// footer text
$wp_customize->add_setting( 'kids_love_theme_options[copyright_text]',
	array(
		'default'       		=> $options['copyright_text'],
		'sanitize_callback'		=> 'kids_love_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);
$wp_customize->add_control( 'kids_love_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'kids-love' ),
		'section'    			=> 'kids_love_section_footer',
		'type'		 			=> 'textarea',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'kids_love_theme_options[copyright_text]', array(
		'selector'            => '.site-info .copyright span',
		'settings'            => 'kids_love_theme_options[copyright_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'kids_love_copyright_text_partial',
    ) );
}

// scroll top visible
$wp_customize->add_setting( 'kids_love_theme_options[scroll_top_visible]',
	array(
		'default'       	=> $options['scroll_top_visible'],
		'sanitize_callback' => 'kids_love_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kids_Love_Switch_Control( $wp_customize, 'kids_love_theme_options[scroll_top_visible]',
    array(
		'label'      		=> esc_html__( 'Display Scroll Top Button', 'kids-love' ),
		'section'    		=> 'kids_love_section_footer',
		'on_off_label' 		=> kids_love_switch_options(),
    )
) );