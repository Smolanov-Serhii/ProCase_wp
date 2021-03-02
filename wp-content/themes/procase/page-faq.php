<?php
/**
 * Template Name: FAQ
 *
 */

get_header();
?>

    <main id="primary" class="site-main faq">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
        ?>
        <div class="faq__content">
            <div class="faq__title">
                <h2>Список частых вопросов и ответов:</h2>
            </div>
            <?php
            $args = array(
                'post_type' => 'FAQ',
                'showposts' => "-1", //сколько показать статей
                'orderby' => "menu_order", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    $post_id = get_the_ID();
                    $image = get_field('fotogalereya_slajd', $post_id);
                    ?>
                    <div class="faq__item">
                        <div class="faq__triger">
                            <h5><?php the_title();?></h5>
                            <div class="close-item">
                                <span class="vert"></span>
                                <span class="hor"></span>
                            </div>
                        </div>
                        <div class="faq__answer" style="display: none;">
                            <?php the_content();?>
                        </div>
                    </div>
                <?php }
            }
            wp_reset_query(); ?>
        </div>
    </main><!-- #main -->
<?php

get_footer();
