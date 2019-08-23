<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 * @return array An array of default values
 */

function kids_love_get_default_theme_options() {
	$kids_love_default_options = array(
		// Color Options
		'header_title_color'			=> '#fff',
		'header_tagline_color'			=> '#fff',
		'header_txt_logo_extra'			=> 'show-all',
				
		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',
		
		// layout 
		'site_layout'         			=> 'wide',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'menu_social_enable'			=> false,

		// excerpt options
		'long_excerpt_length'           => 25,
		'read_more_text'           		=> esc_html__( 'Read More', 'kids-love' ),
		
		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s. ', '1: Year, 2: Site Title with home URL', 'kids-love' ), '[the-year]', '[site-link]' ) . esc_html__( 'All Rights Reserved | ', 'kids-love' ),
		'scroll_top_visible'        	=> true,

		// reset options
		'reset_options'      			=> false,
		
		// homepage options
		'enable_frontpage_content' 		=> false,

		// homepage sections sortable
		'sortable' 						=> 'introduction,hero_content,about,service,blog',

		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( 'Blogs', 'kids-love' ),
		'hide_date' 					=> false,
		'hide_category'					=> false,

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		/* Front Page */

		// Introduction
		'introduction_section_enable'	=> true,
		'introduction_btn_title'		=> esc_html__( 'About Kids Love', 'kids-love' ),

		// Hero Content
		'hero_content_section_enable'	=> true,
		'hero_content_btn_title'		=> esc_html__( 'Download', 'kids-love' ),

		// About
		'about_section_enable'			=> true,
		'about_btn_title'				=> esc_html__( 'Learn More', 'kids-love' ),

		// service
		'service_title'					=> esc_html__( 'Play As You Learn&#33;', 'kids-love' ),
		'service_section_enable'		=> true,

		// blog
		'blog_section_enable'			=> true,
		'blog_content_type'				=> 'recent',
		'blog_title'					=> esc_html__( 'Read Our Story', 'kids-love' ),

	);

	$output = apply_filters( 'kids_love_default_theme_options', $kids_love_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}