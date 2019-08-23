<?php
/**
 * Theme Palace basic theme structure hooks
 *
 * This file contains structural hooks.
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */

$options = kids_love_get_theme_options();


if ( ! function_exists( 'kids_love_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since Kids Love 1.0.0
	 */
	function kids_love_doctype() {
	?>
		<!DOCTYPE html>
			<html <?php language_attributes(); ?>>
	<?php
	}
endif;

add_action( 'kids_love_doctype', 'kids_love_doctype', 10 );


if ( ! function_exists( 'kids_love_head' ) ) :
	/**
	 * Header Codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif;
	}
endif;
add_action( 'kids_love_before_wp_head', 'kids_love_head', 10 );

if ( ! function_exists( 'kids_love_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_page_start() {
		?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kids-love' ); ?></a>
			<div class="menu-overlay"></div>

		<?php
	}
endif;
add_action( 'kids_love_page_start_action', 'kids_love_page_start', 10 );

if ( ! function_exists( 'kids_love_page_end' ) ) :
	/**
	 * Page end html codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'kids_love_page_end_action', 'kids_love_page_end', 10 );

if ( ! function_exists( 'kids_love_header_start' ) ) :
	/**
	 * Header start html codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_header_start() { ?>

		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">
				<div class="site-menu">

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php
					echo kids_love_get_svg( array( 'icon' => 'menu' ) );
					echo kids_love_get_svg( array( 'icon' => 'close' ) );
					?>					
					<span class="menu-label"><?php esc_html_e( 'Menu', 'kids-love' ); ?></span>
				</button>
		<?php
	}
endif;
add_action( 'kids_love_header_action', 'kids_love_header_start', 10 );

if ( ! function_exists( 'kids_love_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_site_branding() {
		$options  = kids_love_get_theme_options();
		$header_txt_logo_extra = $options['header_txt_logo_extra'];		
		?>
		<div class="site-branding">
			<?php if ( in_array( $header_txt_logo_extra, array( 'show-all', 'logo-title', 'logo-tagline' ) )  ) { ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php } 
			if ( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title', 'show-all', 'tagline-only', 'logo-tagline' ) ) ) : ?>
				<div id="site-details">
					<?php
					if( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title' ) )  ) {
						if ( kids_love_is_latest_posts() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;
					} 
					if ( in_array( $header_txt_logo_extra, array( 'show-all', 'tagline-only', 'logo-tagline' ) ) ) {
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
						<?php
						endif; 
					}?>
				</div>
        	<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
	}
endif;
add_action( 'kids_love_header_action', 'kids_love_site_branding', 20 );

if ( ! function_exists( 'kids_love_site_navigation' ) ) :
	/**
	 * Site navigation codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_site_navigation() {
		$options = kids_love_get_theme_options();
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php 
        		$defaults = array(
        			'theme_location' => 'primary',
        			'container' => 'div',
        			'menu_class' => 'menu nav-menu',
        			'menu_id' => 'primary-menu',
        			'echo' => true,
        			'fallback_cb' => 'kids_love_menu_fallback_cb',
        		);
        	
        		wp_nav_menu( $defaults );
        	?>
		</nav><!-- #site-navigation -->
		</div><!-- .site-menu -->
		<?php
	}
endif;
add_action( 'kids_love_header_action', 'kids_love_site_navigation', 30 );

if ( ! function_exists( 'kids_love_site_social_navigation' ) ) :
	/**
	 * Site navigation codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_site_social_navigation() {
		$options = kids_love_get_theme_options();
		if ( ! $options['menu_social_enable'] )
			return;
		?>
		<div id="social-navigation">
            <div class="social-icons">
	            <?php 
		            $social_defaults = array(
						'theme_location' => 'social',
						'container' => false,
						'echo' => true,
						'fallback_cb' => false,
						'depth' => 1,
						'link_before' => '<span class="screen-reader-text">',
						'link_after' => '</span>',
					); 
					wp_nav_menu( $social_defaults );
				?>
            </div><!-- #social-icons -->
		</div><!-- .social-navigation -->
		<?php
	}
endif;
add_action( 'kids_love_header_action', 'kids_love_site_social_navigation', 40 );


if ( ! function_exists( 'kids_love_header_end' ) ) :
	/**
	 * Header end html codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_header_end() {
		?>
			</div><!-- .wrapper -->
		</header><!-- #masthead -->
		<?php
	}
endif;

add_action( 'kids_love_header_action', 'kids_love_header_end', 50 );

if ( ! function_exists( 'kids_love_content_start' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_content_start() {
		?>
		<div id="content" class="site-content">
		<?php
	}
endif;
add_action( 'kids_love_content_start_action', 'kids_love_content_start', 10 );

if ( ! function_exists( 'kids_love_header_image' ) ) :
	/**
	 * Header Image codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_header_image() {
		if ( kids_love_is_frontpage() )
			return;
		$header_image = get_header_image();
		if ( is_singular() ) :
			$header_image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $header_image;
		endif;
		?>

		<div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url( $header_image ); ?>');">
            <div class="overlay"></div>
            <div class="wrapper">
                <header class="page-header">
                    <h2 class="page-title"><?php echo kids_love_custom_header_banner_title(); ?></h2>
                </header>

                <?php kids_love_add_breadcrumb(); ?>
            </div><!-- .wrapper -->
        </div><!-- #page-site-header -->
		<?php
	}
endif;
add_action( 'kids_love_header_image_action', 'kids_love_header_image', 10 );

if ( ! function_exists( 'kids_love_add_breadcrumb' ) ) :
	/**
	 * Add breadcrumb.
	 *
	 * @since Kids Love 1.0.0
	 */
	function kids_love_add_breadcrumb() {
		$options = kids_love_get_theme_options();
		// Bail if Breadcrumb disabled.
		$breadcrumb = $options['breadcrumb_enable'];
		if ( false === $breadcrumb ) {
			return;
		}
		
		// Bail if Home Page.
		if ( kids_love_is_frontpage() ) {
			return;
		}

		echo '<div id="breadcrumb-list">';
				/**
				 * kids_love_simple_breadcrumb hook
				 *
				 * @hooked kids_love_simple_breadcrumb -  10
				 *
				 */
				do_action( 'kids_love_simple_breadcrumb' );
		echo '</div><!-- #breadcrumb-list -->';
		return;
	}
endif;
add_action( 'kids_love_header_image_action', 'kids_love_add_breadcrumb', 20 );

if ( ! function_exists( 'kids_love_content_end' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_content_end() {
		?>
			<div class="menu-overlay"></div>
		</div><!-- #content -->
		<?php
	}
endif;
add_action( 'kids_love_content_end_action', 'kids_love_content_end', 10 );

if ( ! function_exists( 'kids_love_footer_start' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_footer_start() {
		?>
		<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
	}
endif;
add_action( 'kids_love_footer', 'kids_love_footer_start', 10 );

if ( ! function_exists( 'kids_love_footer_site_info' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_footer_site_info() {
		$theme_data = wp_get_theme();
		$options = kids_love_get_theme_options();
		$search = array( '[the-year]', '[site-link]' );

        $replace = array( date( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>' );

        $options['copyright_text'] = str_replace( $search, $replace, $options['copyright_text'] );
        $options['poweredby_text'] = esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'kids-love' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( ucwords( $theme_data->get( 'Author' ) ) ) .'</a>';

		$copyright_text = $options['copyright_text']; 
		$poweredby_text = $options['poweredby_text']; 
		?>
		<div class="site-info wrapper col-2">
            <span>
            	<?php 
            	echo kids_love_santize_allow_tag( $copyright_text ); 
            	echo kids_love_santize_allow_tag( $poweredby_text ); 
            	if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( ' | ' );
				}
            	?>
        	</span>

        	<div class="social-icons">
                <?php  
                	$defaults = array(
        			'theme_location' => 'social',
        			'container' => false,
        			'menu_class' => false,
        			'echo' => true,
        			'fallback_cb' => 'kids_love_menu_fallback_cb',
        			'depth' => 1,
        			'link_before' => '<span class="screen-reader-text">',
					'link_after' => '</span>',
        		);
        	
        		wp_nav_menu( $defaults );
                ?>
            </div>
        </div><!-- .site-info -->

		<?php
	}
endif;
add_action( 'kids_love_footer', 'kids_love_footer_site_info', 40 );

if ( ! function_exists( 'kids_love_footer_scroll_to_top' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_footer_scroll_to_top() {
		$options  = kids_love_get_theme_options();
		if ( true === $options['scroll_top_visible'] ) : ?>
			<div class="backtotop"><?php echo kids_love_get_svg( array( 'icon' => 'up' ) ); ?></div>
		<?php endif;
	}
endif;
add_action( 'kids_love_footer', 'kids_love_footer_scroll_to_top', 40 );

if ( ! function_exists( 'kids_love_footer_end' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Kids Love 1.0.0
	 *
	 */
	function kids_love_footer_end() {
		?>
		</footer>
		<div class="popup-overlay"></div>
		<?php
	}
endif;
add_action( 'kids_love_footer', 'kids_love_footer_end', 100 );
