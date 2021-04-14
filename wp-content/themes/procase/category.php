<?php
/**
 * Template Name: Новости
 *
 */
?>
<?php
get_header();
?>

    <div class="page-news ">
        <article class="page-news__container">
            <header class="delivery__header">
                <div class="delivery__header-img">
                    <?php the_post_thumbnail('full');?>
                </div>
                <div class="delivery__header-content procase-container">
                    <h1 class="delivery__header-title main-page__title">
                        <?php the_field('zagolovok_straniczy_novosti')?>
                    </h1>
                    <div class="delivery__header-subtitle main-page__subtitle">
                        <?php the_field('podzagolovok_straniczy_novosti')?>
                    </div>
                </div>
            </header>
            <div class="page-news__page procase-container">
                <div class="content">
                    <?php the_content();?>
                </div>
            </div>
            <div class="row procase-container">
                    <div class="page-news__content" data-aos="fade-up">
                        <?php // Display blog posts on any page @ http://m0n.co/l
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='. $paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <a href="<?php echo the_permalink();?>" class="page-news__item">
                                <div class="thumb__wrap">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="description">
                                    <h4><?php the_title();?></h4>
                                    <p><?php the_excerpt();?></p>
                                </div>
                            </a>

                        <?php endwhile; ?>

                        <?php if ($paged > 1) { ?>

                            <nav id="nav-posts">
                                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                                <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                            </nav>

                        <?php } else { ?>

                            <nav id="nav-posts">
                                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                            </nav>

                        <?php } ?>

                        <?php wp_reset_postdata(); ?>
                    </div>

            </div>
        </article>
        <div class="related__wrap procase-container">
            <div class="container">
                <div class="row">
                        <div class="top__wrap">
                            <div class="titles">
                                <h2>Последние новости</h2>
                            </div>
                        </div>
                </div>
            </div>
            <div class="swiper-container related__slider" id="related__slider">
                <div class="swiper-wrapper">
                    <?php
                    $result = wp_get_recent_posts( [
                        'numberposts'      => 10,
                        'offset'           => 0,
                        'category'         => 0,
                        'orderby'          => 'post_date',
                        'order'            => 'DESC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '',
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_status'      => 'draft, publish, future, pending, private',
                        'suppress_filters' => true,
                    ], OBJECT );
                    foreach( $result as $post ){
                        setup_postdata( $post );
                        ?>
                        <a href="<?php the_permalink()?>" class="blog__item swiper-slide">
                            <div class="thumb__wrap">
                                <?php the_post_thumbnail();?>
                            </div>
                            <div class="description">
                                <h4><?php the_title();?></h4>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </a>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>