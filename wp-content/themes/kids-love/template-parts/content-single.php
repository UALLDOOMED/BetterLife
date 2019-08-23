<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage Kids Love
 * @since Kids Love 1.0.0
 */
$options = kids_love_get_theme_options();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?>>

	<?php if ( ! $options['single_post_hide_date'] ) :
	    kids_love_posted_on();
	endif; ?>

    <div class="entry-content">
        <?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kids-love' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kids-love' ),
				'after'  => '</div>',
			) );
		?>
    </div><!-- .entry-content -->

    <div class="entry-meta">
        <?php if ( ! $options['single_post_hide_author'] ) :
            echo kids_love_author();
        endif;

        
		kids_love_single_categories();
		kids_love_entry_footer(); 
		?>
    </div><!-- .entry-meta -->

</article><!-- #post-## -->
