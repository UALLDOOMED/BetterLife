<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

/**
 * kids_love_footer_primary_content hook
 *
 * @hooked kids_love_add_contact_section -  10
 *
 */
do_action( 'kids_love_footer_primary_content' );

/**
 * kids_love_content_end_action hook
 *
 * @hooked kids_love_content_end -  10
 *
 */
do_action( 'kids_love_content_end_action' );

/**
 * kids_love_content_end_action hook
 *
 * @hooked kids_love_footer_start -  10
 * @hooked Kids_Love_Footer_Widgets->add_footer_widgets -  20
 * @hooked kids_love_footer_site_info -  40
 * @hooked kids_love_footer_end -  100
 *
 */
do_action( 'kids_love_footer' );

/**
 * kids_love_page_end_action hook
 *
 * @hooked kids_love_page_end -  10
 *
 */
do_action( 'kids_love_page_end_action' ); 

?>

<?php wp_footer(); ?>

</body>
</html>
