<?php
/**
 * Template Name: О компании
 *
 */

get_header();

?>
    <main id="page-about" class="page-about">
        <article>
            <header class="delivery__header">
                <div class="delivery__header-img">
                    <?php the_post_thumbnail('full');?>
                </div>
                <div class="delivery__header-content procase-container">
                    <h1 class="delivery__header-title main-page__title">
                        <?php the_field('zagolovok_v_shapku')?>
                    </h1>
                    <div class="delivery__header-subtitle main-page__subtitle">
                        <?php the_field('podzagolovok_v_shapku')?>
                    </div>
                </div>
            </header>
<!--            <section class="history">-->
<!--                <div class="history__container procase-container">-->
<!--                    --><?php
//                    $args = array(
//                        'post_type' => 'history',
//                        'showposts' => "", //сколько показать статей
//                        'orderby' => "data", //сортировка по дате
//                        'caller_get_posts' => 1);
//                    $my_query = new wp_query($args);
//                    if ($my_query->have_posts()) {
//                        while ($my_query->have_posts()) {
//                            $my_query->the_post();
//                            ?>
<!--                            <div class="history__item">-->
<!--                                <div class="history__image">-->
<!--                                    --><?php //the_post_thumbnail();?>
<!--                                </div>-->
<!--                                <div class="history__description">-->
<!--                                    <div class="history__item-title section-title">-->
<!--                                        --><?php //the_title();?>
<!--                                    </div>-->
<!--                                    <div class="history__content">-->
<!--                                        --><?php //the_excerpt();?>
<!--                                    </div>-->
<!--                                    <a href="--><?php //the_permalink();?><!--" class="history__lnk red-button">Читать...</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //}
//                    }
//                    wp_reset_query(); ?>
<!--                </div>-->
<!--            </section>-->
            <section class="goal">
                <div class="goal__container procase-container">
                    <h2 class="goal__title section-title">
                        <?php the_field('zagolovok_czeli')?>
                    </h2>
                    <div class="goal__content">
                        <?php the_field('kontent_bloka_czeli')?>
                    </div>
                </div>
            </section>
<!--            <section class="digit">-->
<!--                <div class="digit__container procase-container">-->
<!--                    <h2 class="digit__title section-title">-->
<!--                        --><?php //the_field('zagolovok_bloka_czifry')?>
<!--                    </h2>-->
<!--                    <div class="digit__content">-->
<!--                        --><?php
//                        if( have_rows('nashi_czifry_elementy') ):
//                            while( have_rows('nashi_czifry_elementy') ) : the_row();
//                                $digit = get_sub_field('osnovnaya_czifra');
//                                $desc = get_sub_field('opisanie_czifry');
//                                ?>
<!--                                <div class="digit__item">-->
<!--                                    <div class="digit__digit">-->
<!--                                        --><?php //echo $digit?>
<!--                                    </div>-->
<!--                                    <div class="digit__desc">-->
<!--                                        <p>--><?php //echo $desc?><!--</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php
//                            endwhile;
//                        endif;
//                        ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!--            <section class="production procase-container">-->
<!--                <h2 class="production__title procase-container section-title">-->
<!--                    --><?php //the_field('zagolovok_dlya_sekczii_proizvodstvo')?>
<!--                </h2>-->
<!--                <div class="production__content">-->
<!--                    <div class="production__container">-->
<!--                        --><?php
//                        if( have_rows('slajder_dlya_proizvodstva') ):
//                            while( have_rows('slajder_dlya_proizvodstva') ) : the_row();
//                                $bigimage = get_sub_field('kartinka_dlya_pk');
//                                $mobileimage = get_sub_field('kartinka_dlya_mobajla');
//                                ?>
<!--                                <div class="production__item">-->
<!--                                    <picture>-->
<!--                                        <source media="(max-width: 500px)"-->
<!--                                                srcset="--><?php //echo $mobileimage?><!--">-->
<!--                                        <img src="--><?php //echo $bigimage?><!--" alt="">-->
<!--                                    </picture>-->
<!--                                </div>-->
<!--                            --><?php
//                            endwhile;
//                        endif;
//                        ?>
<!--                    </div>-->
<!--                    <div class="production__nav">-->
<!--                        <div class="testimonial__prev">-->
<!--                            <svg width="28" height="53" viewBox="0 0 28 53" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M4.13055e-06 26.4871C-0.000543282 26.1813 0.121891 25.8878 0.340519 25.6713L25.993 0.323442C26.4562 -0.118669 27.1944 -0.105924 27.6418 0.351742C28.0782 0.798281 28.0782 1.50611 27.6418 1.95254L2.81485 26.487L27.6441 51.0191C28.1072 51.4612 28.12 52.1905 27.6727 52.6483C27.2253 53.106 26.4872 53.1186 26.0239 52.6766C26.0142 52.6673 26.0047 52.6579 25.9953 52.6483L0.342816 27.3005C0.123968 27.0849 0.000768981 26.7923 4.13055e-06 26.4871Z" fill="black"/>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="testimonial__next">-->
<!--                            <svg width="28" height="53" viewBox="0 0 28 53" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M28 26.5129C28.0005 26.8187 27.8781 27.1122 27.6595 27.3287L2.00701 52.6766C1.54385 53.1187 0.805646 53.1059 0.358223 52.6483C-0.0781602 52.2017 -0.0781602 51.4939 0.358223 51.0475L25.1852 26.5131L0.355927 1.98092C-0.107238 1.5388 -0.120028 0.809479 0.327287 0.351704C0.77471 -0.105961 1.5128 -0.118599 1.97608 0.323406C1.98581 0.332695 1.99531 0.342091 2.00472 0.351704L27.6572 25.6995C27.876 25.9151 27.9992 26.2077 28 26.5129Z" fill="black"/>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
            <section class="partners">
                <div class="partners__container procase-container">
                    <h2 class="partners__title section-title">
                        <?php the_field('zagolovok_bloka_partnyory')?>
                    </h2>
                    <div class="partners__list swiper-container">
                        <div class="partners__wrapper swiper-wrapper">
                            <?php
                            if( have_rows('spisok_partnyorov') ):
                                while( have_rows('spisok_partnyorov') ) : the_row();
                                    $image = get_sub_field('logotip_partnyora');
                                    $alt = get_sub_field('opisanie_logotipa_partnyora');
                                    ?>
                                    <div class="partners__item swiper-slide">
                                        <img src="<?php echo $image;?>" alt="<?php echo $alt;?>">
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
<?php

get_footer();
