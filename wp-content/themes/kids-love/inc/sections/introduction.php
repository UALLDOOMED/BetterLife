<?php
/**
 * Introduction section
 *
 * This is the template for the content of introduction section
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */
if ( ! function_exists( 'kids_love_add_introduction_section' ) ) :
    /**
    * Add introduction section
    *
    *@since Kids Love 1.0.0
    */
    function kids_love_add_introduction_section() {
    	$options = kids_love_get_theme_options();
        // Check if introduction is enabled on frontpage
        $introduction_enable = apply_filters( 'kids_love_section_status', true, 'introduction_section_enable' );

        if ( true !== $introduction_enable ) {
            return false;
        }
        // Get introduction section details
        $section_details = array();
        $section_details = apply_filters( 'kids_love_filter_introduction_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render introduction section now.
        kids_love_render_introduction_section( $section_details );
    }
endif;

if ( ! function_exists( 'kids_love_get_introduction_section_details' ) ) :
    /**
    * introduction section details.
    *
    * @since Kids Love 1.0.0
    * @param array $input introduction section details.
    */
    function kids_love_get_introduction_section_details( $input ) {
        $options = kids_love_get_theme_options();

        $content = array();
        $page_id = ! empty( $options['introduction_content_page'] ) ? $options['introduction_content_page'] : '';
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
                $page_post['image']  	= has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'large' ) : '';

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
// introduction section content details.
add_filter( 'kids_love_filter_introduction_section_details', 'kids_love_get_introduction_section_details' );


if ( ! function_exists( 'kids_love_render_introduction_section' ) ) :
  /**
   * Start introduction section
   *
   * @return string introduction content
   * @since Kids Love 1.0.0
   *
   */
   function kids_love_render_introduction_section( $content_details = array() ) {
        $options = kids_love_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } 

        foreach ( $content_details as $content ) : ?>
            <div id="introduction-section" class="relative">
                <div class="wrapper">
                    <article class="has-post-thumbnail">
                        <?php if ( ! empty( $content['image'] ) ) : ?>
                            <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>')">
                                <a href="<?php echo esc_url( $content['url'] ); ?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                            <?php if ( ! empty( $content['title'] ) ) : ?>
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                </header>
                            <?php endif; ?>

                            <div class="buttons">
                                <?php if ( ! empty( $options['introduction_btn_title'] ) && ! empty( $content['url'] ) ) : ?>
                                    <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn">
                                        <?php 
                                            echo esc_html( $options['introduction_btn_title'] ); 
                                            echo kids_love_get_svg( array( 'icon' => 'play' ) );
                                        ?>
                                            
                                    </a>
                                <?php endif; ?>

                            </div><!-- .buttons -->
                        </div><!-- .entry-container -->
                    </article>
                </div><!-- .wrapper -->
            </div><!-- #introduction-section -->

        <?php endforeach;
    }
endif;