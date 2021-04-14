<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProCase
 */

?>
<article id="post-<?php the_ID(); ?>" class="">
    <header class="delivery__header">
        <div class="delivery__header-img">
            <?php the_post_thumbnail('full');?>
        </div>
        <div class="delivery__header-content procase-container">
            <h1 class="delivery__header-title main-page__title">
                <?php the_title();?>
            </h1>
            <div class="delivery__header-subtitle main-page__subtitle">
                <?php the_field('podzagolovok_v_shapku_straniczy')?>
            </div>
        </div>
    </header>


	<div class="entry-content procase-container">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'procase' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'procase' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
