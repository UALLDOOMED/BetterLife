<?php
/**
 * Blog section
 *
 * This is the template for the content of blog section
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */
if ( ! function_exists( 'kids_love_add_blog_section' ) ) :
    /**
    * Add blog section
    *
    *@since Kids Love 1.0.0
    */
    function kids_love_add_blog_section() {
    	$options = kids_love_get_theme_options();
        // Check if blog is enabled on frontpage
        $blog_enable = apply_filters( 'kids_love_section_status', true, 'blog_section_enable' );

        if ( true !== $blog_enable ) {
            return false;
        }
        // Get blog section details
        $section_details = array();
        $section_details = apply_filters( 'kids_love_filter_blog_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render blog section now.
        kids_love_render_blog_section( $section_details );
    }
endif;

if ( ! function_exists( 'kids_love_get_blog_section_details' ) ) :
    /**
    * blog section details.
    *
    * @since Kids Love 1.0.0
    * @param array $input blog section details.
    */
    function kids_love_get_blog_section_details( $input ) {
        $options = kids_love_get_theme_options();

        // Content type.
        $blog_content_type  = $options['blog_content_type'];
        
        $content = array();
        switch ( $blog_content_type ) {
        	
            case 'category':
                $cat_id = ! empty( $options['blog_content_category'] ) ? $options['blog_content_category'] : '';
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 3,
                    'cat'               => absint( $cat_id ),
                    'ignore_sticky_posts'   => true,
                    );                    
            break;

            case 'recent':
                $cat_ids = ! empty( $options['blog_category_exclude'] ) ? $options['blog_category_exclude'] : array();
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 3,
                    'category__not_in'  => ( array ) $cat_ids,
                    'ignore_sticky_posts'   => true,
                    );                    
            break;

            default:
            break;
        }


        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = kids_love_trim_content( 20 );
                $page_post['author']    = kids_love_author();
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
// blog section content details.
add_filter( 'kids_love_filter_blog_section_details', 'kids_love_get_blog_section_details' );


if ( ! function_exists( 'kids_love_render_blog_section' ) ) :
  /**
   * Start blog section
   *
   * @return string blog content
   * @since Kids Love 1.0.0
   *
   */
   function kids_love_render_blog_section( $content_details = array() ) {
        $options = kids_love_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>

        <div id="latest-posts" class="relative page-section archive-blog-wrapper">
            <div class="wrapper">
                <?php if ( ! empty( $options['blog_title'] ) ) : ?>
                    <div class="section-header">
                        <h2 class="section-title"><?php echo esc_html( $options['blog_title'] ); ?></h2>
                    </div><!-- .section-header -->
                <?php endif; ?>

                <div class="section-content">
                    <div class="faq-group">
                        <?php $i = 1;
                        foreach ( $content_details as $content ) : ?>
                            <div class="each-faq <?php echo ( 2 === $i ) ? 'open' : ''; ?>">
                                <div class="faq-trigger">
                                    <div class="entry-meta">
                                        <span class="cat-links">
                                            <?php the_category( '', '', $content['id'] ); ?>
                                        </span><!-- .cat-links -->

                                        <?php kids_love_posted_on( $content['id'] ); ?> 
                                    </div><!-- .entry-meta -->

                                    <h4><?php echo esc_html( $content['title'] ); ?></h4>

                                    <div class="trigger-icon">
                                        <i class="fa fa-plus"></i>
                                    </div><!-- .trigger-icon -->
                                </div><!-- .faq-trigger -->

                                <div class="faq-content">
                                    <article class="<?php echo ! empty( $content['image'] ) ? 'has' : 'no'; ?>-post-thumbnail">
                                        <?php if ( ! empty( $content['image'] ) ) : ?>
                                            <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                                <a href="<?php echo esc_url( $content['url'] ); ?>" class="post-thumbnail-link"></a>
                                            </div><!-- .featured-image -->
                                        <?php endif; ?>

                                        <div class="entry-container">
                                            <div class="faq-trigger trigger-icon">
                                                <i class="fa fa-minus"></i>
                                            </div><!-- .trigger-icon -->

                                            <div class="entry-meta">
                                                <span class="cat-links">
                                                    <?php the_category( '', '', $content['id'] ); ?>
                                                </span><!-- .cat-links -->

                                                <?php kids_love_posted_on( $content['id'] ); ?> 
                                            </div><!-- .entry-meta -->

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                            </header>

                                            <div class="entry-content">
                                                <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                                            </div><!-- .entry-content -->

                                            <?php echo wp_kses_post( $content['author'] ); ?>
                                        </div><!-- .entry-container -->
                                    </article>
                                </div> <!-- .faq-content -->
                            </div><!-- .each-faq -->
                        <?php $i++; 
                        endforeach; ?>
                    </div><!-- .faq-group -->
                </div><!-- .section-content --> 
            </div><!-- .wrapper -->
        </div><!-- #latest-posts -->

    <?php }
endif;