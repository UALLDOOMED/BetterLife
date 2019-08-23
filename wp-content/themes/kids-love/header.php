<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Theme Palace
	 * @subpackage Kids Love
	 * @since Kids Love 1.0.0
	 */

	/**
	 * kids_love_doctype hook
	 *
	 * @hooked kids_love_doctype -  10
	 *
	 */
	do_action( 'kids_love_doctype' );

?>
<head>
<?php
	/**
	 * kids_love_before_wp_head hook
	 *
	 * @hooked kids_love_head -  10
	 *
	 */
	do_action( 'kids_love_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php
	/**
	 * kids_love_page_start_action hook
	 *
	 * @hooked kids_love_page_start -  10
	 *
	 */
	do_action( 'kids_love_page_start_action' ); 

	/**
	 * kids_love_header_action hook
	 *
	 * @hooked kids_love_header_start -  10
	 * @hooked kids_love_site_branding -  20
	 * @hooked kids_love_site_navigation -  30
	 * @hooked kids_love_header_end -  50
	 *
	 */
	do_action( 'kids_love_header_action' );

	/**
	 * kids_love_content_start_action hook
	 *
	 * @hooked kids_love_content_start -  10
	 *
	 */
	do_action( 'kids_love_content_start_action' );

	/**
	 * kids_love_header_image_action hook
	 *
	 * @hooked kids_love_header_image -  10
	 *
	 */
	do_action( 'kids_love_header_image_action' );

    if ( kids_love_is_frontpage() ) {
    	$options = kids_love_get_theme_options();
    	$sorted = array();
    	if ( ! empty( $options['sortable'] ) ) {
			$sorted = explode( ',' , $options['sortable'] );
		}

		foreach ( $sorted as $section ) {
			add_action( 'kids_love_primary_content', 'kids_love_add_'. $section .'_section' );
		}
		do_action( 'kids_love_primary_content' );
	}
	