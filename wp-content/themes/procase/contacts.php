<?php
/**
 * Template Name: Контакты
 *
 */

get_header();

?>
    <main id="contacts" class="contacts">
        <article class="contacts__article">
            <section class="delivery__header">
                <div class="delivery__header-img">
                    <?php the_post_thumbnail('full');?>
                </div>
                <div class="delivery__header-content procase-container">
                    <h1 class="delivery__header-title main-page__title">
                        <?php the_title();?>
                    </h1>
                    <div class="delivery__header-subtitle main-page__subtitle">
                        <?php the_field('podzagolovok_kontakty')?>
                    </div>
                </div>
            </section>
            <section class="contacts__items procase-container">
                <h2 class="contacts__items-title section-title">
                    <?php the_field('zagolovok_tipov_kontaktov')?>
                </h2>
                <div class="contacts__items-content">
                    <?php
                    if( have_rows('tipy_kontaktov') ):
                        while( have_rows('tipy_kontaktov') ) : the_row();
                            $typetitle = get_sub_field('gagolovok_dlya_kontakta');
                            $typedesc = get_sub_field('opisanie_dlya_kontakta');
                            $typeimage = get_sub_field('kartinka_dlya_tipa_kontakta');
                            ?>
                            <div class="contacts__items-item">
                                <div class="contacts__items-img">
                                    <img src="<?php echo $typeimage;?>" alt="<?php echo $typetitle;?>">
                                </div>
                                <h4 class="contacts__items-title">
                                    <?php echo $typetitle;?>
                                </h4>
                                <?php echo $typedesc;?>
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>

                </div>
            </section>
            <section class="delivery__map">
                <div id="map" class="map-container">

                </div>
            </section>
            <section class="wholesaler__form procase-container">
                <h2 class="wholesaler__form-title section-title">
                    <?php the_field('zagolovok_pered_formoj')?>
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="408" title="Фома для Оптовиков"]')?>
            </section>s
        </article>
    </main>
<?php

get_footer();
