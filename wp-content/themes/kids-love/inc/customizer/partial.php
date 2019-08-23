<?php
/**
* Partial functions
*
* @package Theme Palace
* @subpackage Kids Love
* @since Kids Love 1.0.0
*/

if ( ! function_exists( 'kids_love_introduction_btn_title_partial' ) ) :
    // introduction btn title
    function kids_love_introduction_btn_title_partial() {
        $options = kids_love_get_theme_options();
        return esc_html( $options['introduction_btn_title'] );
    }
endif;

if ( ! function_exists( 'kids_love_hero_content_btn_title_partial' ) ) :
    // hero_content btn title
    function kids_love_hero_content_btn_title_partial() {
        $options = kids_love_get_theme_options();
        return esc_html( $options['hero_content_btn_title'] );
    }
endif;

if ( ! function_exists( 'kids_love_about_btn_title_partial' ) ) :
    // about btn title
    function kids_love_about_btn_title_partial() {
        $options = kids_love_get_theme_options();
        return esc_html( $options['about_btn_title'] );
    }
endif;

if ( ! function_exists( 'kids_love_service_title_partial' ) ) :
    // service title
    function kids_love_service_title_partial() {
        $options = kids_love_get_theme_options();
        return esc_html( $options['service_title'] );
    }
endif;

if ( ! function_exists( 'kids_love_blog_title_partial' ) ) :
    // blog title
    function kids_love_blog_title_partial() {
        $options = kids_love_get_theme_options();
        return esc_html( $options['blog_title'] );
    }
endif;
