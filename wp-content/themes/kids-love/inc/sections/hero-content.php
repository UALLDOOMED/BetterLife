<?php
/**
 * Hero Content section
 *
 * This is the template for the content of hero_content section
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */
if ( ! function_exists( 'kids_love_add_hero_content_section' ) ) :
    /**
    * Add hero_content section
    *
    *@since Kids Love 1.0.0
    */
    function kids_love_add_hero_content_section() {
    	$options = kids_love_get_theme_options();
        // Check if hero_content is enabled on frontpage
        $hero_content_enable = apply_filters( 'kids_love_section_status', true, 'hero_content_section_enable' );

        if ( true !== $hero_content_enable ) {
            return false;
        }
        // Get hero_content section details
        $section_details = array();
        $section_details = apply_filters( 'kids_love_filter_hero_content_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render hero_content section now.
        kids_love_render_hero_content_section( $section_details );
    }
endif;

if ( ! function_exists( 'kids_love_get_hero_content_section_details' ) ) :
    /**
    * hero_content section details.
    *
    * @since Kids Love 1.0.0
    * @param array $input hero_content section details.
    */
    function kids_love_get_hero_content_section_details( $input ) {
        $options = kids_love_get_theme_options();

        $content = array();
        $page_id = ! empty( $options['hero_content_content_page'] ) ? $options['hero_content_content_page'] : '';
        $args = array(
            'post_type'         => 'page',
            'page_id'           => $page_id,
            'posts_per_page'    => 1,
            );                    

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = kids_love_trim_content( 25 );
                $page_post['image']  	= has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'post-thumbnail' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// hero_content section content details.
add_filter( 'kids_love_filter_hero_content_section_details', 'kids_love_get_hero_content_section_details' );


if ( ! function_exists( 'kids_love_render_hero_content_section' ) ) :
  /**
   * Start hero_content section
   *
   * @return string hero_content content
   * @since Kids Love 1.0.0
   *
   */
   function kids_love_render_hero_content_section( $content_details = array() ) {
        $options = kids_love_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } 

        foreach ( $content_details as $content ) : ?>
            <div id="hero-section" class="relative page-section">
                <div class="wrapper">
                    <article class="<?php echo ( ! empty( $content['image'] ) ? 'has' : 'no' ); ?>-post-thumbnail">
                        <?php if ( ! empty( $content['image'] ) ) : ?>
                            <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                <a href="<?php echo esc_url( $content['image'] ); ?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                            <?php if ( ! empty( $content['title'] ) ) : ?>
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                </header>
                            <?php endif; 

                            if ( ! empty( $content['excerpt'] ) ) : ?>
                                <div class="entry-content">
                                    <p><?php echo wp_kses_post( $content['excerpt'] ); ?></p>
                                </div><!-- .entry-content -->
                            <?php endif; ?>
                        </div><!-- .entry-container -->

                        <?php if ( ! empty( $content['url'] ) && ! empty( $options['hero_content_btn_title'] ) ) : ?>
                            <div class="read-more">
                                <a href="<?php echo esc_url( $content['url'] ) ?>" class="btn">
                                    <?php 
                                        echo esc_html( $options['hero_content_btn_title'] ); 
                                        echo kids_love_get_svg( array( 'icon' => 'play' ) );
                                    ?>
                                </a>
                            </div><!-- .read-more -->
                        <?php endif; ?>
                    </article>
                </div><!-- .wrapper -->
            </div><!-- #hero-section -->
        <?php endforeach;
    }
endif;