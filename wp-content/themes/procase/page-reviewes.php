<?php
/**
 * Template Name: Отзывы
 *
 */

get_header();
?>

    <main id="rev-page" class="rev-page">
        <article>
            <header class="delivery__header">
                <div class="delivery__header-img">
                    <?php the_post_thumbnail('full');?>
                </div>
                <div class="delivery__header-content procase-container">
                    <h1 class="delivery__header-title main-page__title">
                        <?php the_field('zagolovok_dlya_straniczy_otzyvy')?>
                    </h1>
                    <div class="delivery__header-subtitle main-page__subtitle">
                        <?php the_field('podzagolovok_dlya_straniczy_otzyvy')?>
                    </div>
                </div>
            </header>
            <div class="rev-page__mail procase-container">
                <div class="rev-page__list">
                    <?php
                    if( have_rows('pisma_klientov') ):
                        while( have_rows('pisma_klientov') ) : the_row();
                            $imageitem = get_sub_field('izobrazhenie_pisma');
                            ?>
                            <div class="rev-page-item">
                                <a href="<?php echo $imageitem;?>" class="fresco"><img src="<?php echo $imageitem; ?>" alt="" /></a>
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
            <div class="rev-page__send procase-container">
                <div class="container ">
                    <div class="rev-page__send-img">
                        <img src="<?php echo the_field('kartinka_v_blok_dobavit_otzyv')?>" alt="">
                    </div>
                    <div class="rev-page__send-desc">
                            <h3><?php the_field('zagolovok_v_blok_ostavit_otziv')?></h3>
                            <?php the_field('tekst_v_blok_kartinki_ostavit_otzyv')?>
                            <div class="red-button js-reviewe">Оставить отзыв</div>
                    </div>
                </div>
            </div>
            <div class="rev-page__content procase-container">
                <?php
                the_content();
                ?>
            </div><!-- .entry-content -->
        </article>
    </main><!-- #main -->
<?php

get_footer();
