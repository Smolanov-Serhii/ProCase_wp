<?php
/**
 * Template Name: Вопросы и ответы
 *
 */

get_header();
?>

    <main id="faq-page" class="faq-page">
        <article>
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
                the_content();
                ?>
            </div><!-- .entry-content -->
            <div class="faq__content procase-container">
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
        </article>
    </main><!-- #main -->
<?php

get_footer();
