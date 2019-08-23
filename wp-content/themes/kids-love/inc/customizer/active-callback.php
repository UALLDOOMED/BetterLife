<?php
/**
 * Customizer active callbacks
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

if ( ! function_exists( 'kids_love_is_loader_enable' ) ) :
	/**
	 * Check if loader is enabled.
	 *
	 * @since Kids Love 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function kids_love_is_loader_enable( $control ) {
		return $control->manager->get_setting( 'kids_love_theme_options[loader_enable]' )->value();
	}
endif;

if ( ! function_exists( 'kids_love_is_breadcrumb_enable' ) ) :
	/**
	 * Check if breadcrumb is enabled.
	 *
	 * @since Kids Love 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function kids_love_is_breadcrumb_enable( $control ) {
		return $control->manager->get_setting( 'kids_love_theme_options[breadcrumb_enable]' )->value();
	}
endif;

if ( ! function_exists( 'kids_love_is_pagination_enable' ) ) :
	/**
	 * Check if pagination is enabled.
	 *
	 * @since Kids Love 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function kids_love_is_pagination_enable( $control ) {
		return $control->manager->get_setting( 'kids_love_theme_options[pagination_enable]' )->value();
	}
endif;

/**
 * Front Page Active Callbacks
 */

/**
 * Check if introduction section is enabled.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_introduction_section_enable( $control ) {
	return ( $control->manager->get_setting( 'kids_love_theme_options[introduction_section_enable]' )->value() );
}

/**
 * Check if hero_content section is enabled.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_hero_content_section_enable( $control ) {
	return ( $control->manager->get_setting( 'kids_love_theme_options[hero_content_section_enable]' )->value() );
}

/**
 * Check if about section is enabled.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_about_section_enable( $control ) {
	return ( $control->manager->get_setting( 'kids_love_theme_options[about_section_enable]' )->value() );
}

/**
 * Check if service section is enabled.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_service_section_enable( $control ) {
	return ( $control->manager->get_setting( 'kids_love_theme_options[service_section_enable]' )->value() );
}

/**
 * Check if blog section is enabled.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_blog_section_enable( $control ) {
	return ( $control->manager->get_setting( 'kids_love_theme_options[blog_section_enable]' )->value() );
}

/**
 * Check if blog section content type is category.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_blog_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'kids_love_theme_options[blog_content_type]' )->value();
	return kids_love_is_blog_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if blog section content type is recent.
 *
 * @since Kids Love 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function kids_love_is_blog_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'kids_love_theme_options[blog_content_type]' )->value();
	return kids_love_is_blog_section_enable( $control ) && ( 'recent' == $content_type );
}
