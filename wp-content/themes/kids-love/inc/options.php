<?php
/**
 * Theme Palace options
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

/**
 * List of pages for page choices.
 * @return Array Array of page ids and name.
 */
function kids_love_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'kids-love' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}

/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function kids_love_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'kids-love' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'kids_love_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function kids_love_site_layout() {
        $kids_love_site_layout = array(
            'wide'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
        );

        $output = apply_filters( 'kids_love_site_layout', $kids_love_site_layout );
        return $output;
    }
endif;

if ( ! function_exists( 'kids_love_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function kids_love_selected_sidebar() {
        $kids_love_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'kids-love' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar', 'kids-love' ),
        );

        $output = apply_filters( 'kids_love_selected_sidebar', $kids_love_selected_sidebar );

        return $output;
    }
endif;


if ( ! function_exists( 'kids_love_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function kids_love_global_sidebar_position() {
        $kids_love_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'kids_love_global_sidebar_position', $kids_love_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'kids_love_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function kids_love_sidebar_position() {
        $kids_love_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'kids_love_sidebar_position', $kids_love_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'kids_love_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function kids_love_pagination_options() {
        $kids_love_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'kids-love' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'kids-love' ),
        );

        $output = apply_filters( 'kids_love_pagination_options', $kids_love_pagination_options );

        return $output;
    }
endif;

if ( ! function_exists( 'kids_love_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function kids_love_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'kids-love' ),
            'off'       => esc_html__( 'Disable', 'kids-love' )
        );
        return apply_filters( 'kids_love_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'kids_love_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function kids_love_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'kids-love' ),
            'off'       => esc_html__( 'No', 'kids-love' )
        );
        return apply_filters( 'kids_love_hide_options', $arr );
    }
endif;

if ( ! function_exists( 'kids_love_sortable_sections' ) ) :
    /**
     * List of sections Control options
     * @return array List of Sections control options.
     */
    function kids_love_sortable_sections() {
        $sections = array(
            'introduction'  => esc_html__( 'Introduction', 'kids-love' ),
            'hero_content'  => esc_html__( 'Hero Content', 'kids-love' ),
            'about'         => esc_html__( 'About Us', 'kids-love' ),
            'service'       => esc_html__( 'Services', 'kids-love' ),
            'blog'          => esc_html__( 'Blog', 'kids-love' ),
        );
        return apply_filters( 'kids_love_sortable_sections', $sections );
    }
endif;