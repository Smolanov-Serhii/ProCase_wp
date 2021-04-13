<?php
/**
 * Template Name: Доставка и оплата
 *
 */

get_header();

?>
    <main id="delivery" class="delivery">
        <article class="delivery__article">
            <section class="delivery__header">
                <div class="delivery__header-img">
                    <?php the_post_thumbnail('full');?>
                </div>
                <div class="delivery__header-content procase-container">
                    <h1 class="delivery__header-title main-page__title">
                        <?php the_title();?>
                    </h1>
                    <div class="delivery__header-subtitle main-page__subtitle">
                        <?php the_field('podzagolovok_stranicza_dostavka')?>
                    </div>
                </div>
            </section>
            <section class="delivery__types procase-container">
                <?php
                    if( have_rows('tipy_dostavki') ):
                        while( have_rows('tipy_dostavki') ) : the_row();
                            $typetitle = get_sub_field('zagolovk_tipa_dostavki');
                            $typesubtitle = get_sub_field('podzagolovok_tipa_dostavki');
                            $typeimage = get_sub_field('izobrpadenie_tipa_dostavki');
                            ?>
                                <div class="delivery__types-item">
                                    <div class="delivery__types-img">
                                        <img src="<?php echo $typeimage;?>" alt="<?php echo $typesubtitle;?>">
                                    </div>
                                    <h2 class="delivery__types-title">
                                        <?php echo $typetitle;?>
                                    </h2>
                                    <div class="delivery__types-desc">
                                        <?php echo $typesubtitle;?>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                    else :
                    endif;
                    ?>
            </section>
            <section class="delivery__first-desc procase-container">
                <?php the_field('blok_opisanie_verhnij')?>
            </section>
            <section class="delivery__map">
                <div id="map" class="map-container">

                </div>
            </section>
            <section class="delivery__second-desc procase-container">
                <?php the_field('vtoroj_blok_opisaniya')?>
            </section>
            <section class="delivery__bottom">
                <div class="delivery__bottom-img">
                    <?php
                    $image = get_field('kartinka_dlya_bloka_dostavka_i_oplata');
                    ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <div class="delivery__bottom-desc procase-container">
                    <?php echo the_field('nizhnij_blok')?>
                    <a class="red-button" href="<?php echo the_field('ssylka_na_knopku_podrobnee')?>">Подробнее...</a>
                </div>

            </section>
        </article>
    </main>
<?php

get_footer();
