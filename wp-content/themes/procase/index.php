<?php
/**
 * Template Name: Главная
 *
 */

get_header();
?>
    <main id="main-page" class="main-page">
        <section class="main-page__banner swiper-container">
            <div class="swiper-wrapper">
                <?php
                if (have_rows('slajder_banera')):
                    while (have_rows('slajder_banera')) : the_row();
                        $sub_image = get_sub_field('izobrazhenie_banera');
                        $sub_image_mob = get_sub_field('izobrazhenie_banera_mob');
                        $sub_title = get_sub_field('zagolovok_dlya_banera');
                        $sub_subtitle = get_sub_field('podzagolovok_dlya_banera');
                        $sub_lnk = get_sub_field('ssylka_dlya_knopki_banera');
                        ?>
                        <div class="main-page__slide swiper-slide">
                            <div class="main-page__image">
                                <picture>
                                    <source media="(max-width: 768px)"
                                            srcset="<?php echo $sub_image_mob;?>">
                                    <img src="<?php echo $sub_image;?>" alt="<?php echo $sub_title ?>">
                                </picture>
                            </div>
                            <div class="main-page__content">
                                <div class="main-page__wrapper procase-container">
                                    <h1 class="main-page__title">
                                        <?php echo $sub_title; ?>
                                    </h1>
                                    <h2 class="main-page__subtitle">
                                        <?php echo $sub_subtitle; ?>
                                    </h2>
                                    <div>
                                        <a  class="main-page__lnk" href="<?php echo $sub_lnk; ?>">перейти в каталог</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </section>
        <section class="about-case"
                 style="background-image: url(<?php echo the_field('fon_dlya_bloka_kejsy_kofry', 2); ?>)">
            <div class="about-case__container">
                <h2 class="about-case__title section-title">
                    <?php the_field('zagolovok_bloka_kejsy_kofry', 2); ?>
                </h2>
                <div class="about-case__wrapper">
                    <?php

                    if (have_rows('elemennty_dlya_opisaniya_bloka_kejsy_kofry', 2)):

                        while (have_rows('elemennty_dlya_opisaniya_bloka_kejsy_kofry', 2)) : the_row();

                            $iconimage = get_sub_field('ikonka_dlya_zapisi_kejsy_kofry', 2);
                            $icontitle = get_sub_field('zagolovok_dlya_elementa_kesy_kofry', 2);
                            ?>
                            <div class="about-case__item">
                                <div class="about-case__item-img">
                                    <img src="<?php echo $iconimage ?>" alt="<?php echo $icontitle ?>">
                                </div>
                                <div class="about-case__item-title">
                                    <?php echo $icontitle ?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="test">
            <div class="test__wrapper">
                <h2 class="test__title section-title">
                    <?php the_field('zagolovok_bloka_projti_test', 2); ?>
                </h2>
                <div class="test__subtitle">
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.004 16.0039C32.4539 16.0039 32.0079 16.4499 32.0079 17C32.0079 25.2753 25.2754 32.0077 17.0001 32.0077C8.72474 32.0077 1.99226 25.2753 1.99226 17C1.99226 8.72467 8.72474 1.99224 17.0001 1.99224C19.5235 1.99224 21.9781 2.61878 24.1693 3.81262L22.9239 5.05793C22.6391 5.34281 22.5539 5.7712 22.708 6.14347C22.8622 6.51567 23.2254 6.75839 23.6283 6.75839H28.3944C28.9446 6.75839 29.3905 6.31241 29.3905 5.7623V0.99615C29.3905 0.593266 29.1479 0.230092 28.7756 0.0758978C28.4033 -0.078363 27.9749 0.00690213 27.6901 0.29185L25.6303 2.35156C23.0213 0.811144 20.0549 0.000128717 17 0.000128717C12.4592 0.000128717 8.19003 1.76845 4.97915 4.97924C1.76827 8.19016 0 12.4592 0 17C0 21.5409 1.76827 25.8099 4.97915 29.0208C8.1901 32.2317 12.4592 34 17 34C21.5409 34 25.81 32.2317 29.0209 29.0208C32.2318 25.8099 34 21.5409 34 17C34.0001 16.4499 33.5541 16.0039 33.004 16.0039Z"
                              fill="black"/>
                        <path d="M11.9337 13.4381V20.2381H10.36V14.701H9V13.4381H11.9337Z" fill="black"/>
                        <path d="M22.8798 14.9341C23.5339 14.9341 24.052 15.1284 24.4341 15.517C24.8227 15.8991 25.017 16.4754 25.017 17.2461V20.2381H23.5015V17.4793C23.5015 17.0648 23.4141 16.7572 23.2392 16.5564C23.0709 16.3492 22.828 16.2455 22.5107 16.2455C22.1545 16.2455 21.8728 16.3621 21.6655 16.5953C21.4583 16.8219 21.3547 17.1619 21.3547 17.6153V20.2381H19.8392V17.4793C19.8392 16.6568 19.509 16.2455 18.8484 16.2455C18.4987 16.2455 18.2202 16.3621 18.013 16.5953C17.8057 16.8219 17.7021 17.1619 17.7021 17.6153V20.2381H16.1867V15.0118H17.6341V15.6141C17.8284 15.3939 18.0648 15.2255 18.3432 15.109C18.6282 14.9924 18.9391 14.9341 19.2758 14.9341C19.645 14.9341 19.9785 15.0086 20.2764 15.1575C20.5743 15.3 20.8139 15.5105 20.9952 15.789C21.209 15.517 21.4777 15.3065 21.8015 15.1575C22.1318 15.0086 22.4912 14.9341 22.8798 14.9341Z"
                              fill="black"/>
                    </svg>
                    <span>это займёт всего минуту</span>
                </div>
                <form id="add_feedback">
                    <div class="test__slider">
                        <div class="test__container test__container-item">
                            <div class="test__video">
                                <?php the_field('ssylka_na_video_testa', 2); ?>
                            </div>
                            <div class="test__content">
                                <div class="test__small-title">
                                    <?php the_field('shapka_opisaniya', 2); ?>
                                </div>
                                <div class="test__desc">
                                    <?php

                                    if (have_rows('opisanie_bloka_test', 2)):

                                        while (have_rows('opisanie_bloka_test', 2)) : the_row();

                                            $testtitle = get_sub_field('punkt_opisaniya', 2);
                                            ?>
                                            <div class="test__item">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path d="M30.4764 15.9421C30.7424 16.9807 30.8981 18.0637 30.8981 19.1839C30.8981 26.4277 25.0061 32.3194 17.7627 32.3194C10.5194 32.3194 4.62604 26.4277 4.62604 19.1839C4.62604 11.9404 10.5194 6.04711 17.7627 6.04711C19.6088 6.04711 21.3642 6.43445 22.9598 7.12452L24.9126 3.98547C22.7395 2.95871 20.3216 2.36682 17.7627 2.36682C8.48971 2.36682 0.945312 9.91121 0.945312 19.1839C0.945312 28.4558 8.48971 36.0001 17.7627 36.0001C27.0343 36.0001 34.5785 28.4558 34.5785 19.1839C34.5785 16.6068 33.9784 14.1726 32.9387 11.9873L30.4764 15.9421Z"
                                                              fill="black"/>
                                                        <path d="M33.6082 0.463446C32.1706 -0.430524 30.2789 0.0078258 29.3838 1.44543L17.1888 21.0422L13.1036 15.2162C12.1321 13.83 10.2175 13.4944 8.83123 14.466C7.44528 15.439 7.10845 17.3508 8.08122 18.7383L14.8297 28.3625C15.4051 29.1818 16.343 29.6683 17.341 29.6683C17.3685 29.6683 17.3974 29.6683 17.4249 29.667C18.4539 29.6383 19.4007 29.0959 19.9443 28.222L34.5909 4.68767C35.4869 3.24847 35.0459 1.358 33.6082 0.463446Z"
                                                              fill="#D62D30"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="36" height="36" fill="white"
                                                                  transform="translate(0 0.00012207)"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span><?php echo $testtitle; ?></span>
                                            </div>
                                        <?php
                                        endwhile;
                                    else :
                                    endif;
                                    ?>
                                </div>
                                <div class="test__button red-button js-to-second">
                                    пройти тест
                                </div>
                            </div>
                        </div>
                        <div class="test__container-item type-slide type-slide-first">
                            <div class="test__container-count"><p>Вопрос 1 из 4</p></div>
                            <h2 class="test__container-item-title">Для чего Вам нужен кейс (кофр)?</h2>
                            <div class="test__container-item-container">
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-1.jpg" alt="Для концертного оборудования">
                                    <div class="wrapper">
                                        <input type="checkbox" id="type-concert" name="type-concert">
                                        <span>Для концертного оборудования</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-2.jpg" alt="Универсальные">
                                    <div class="wrapper">
                                        <input type="checkbox" id="type-universal" name="type-universal">
                                        <span>Универсальные</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-3.jpg" alt="Для 19' рэкового оборудования">
                                    <div class="wrapper">
                                        <input type="checkbox" id="type-reco" name="type-reco">
                                        <span>Для 19" рэкового оборудования</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-4.jpg" alt="Для музыкальных инструментов">
                                    <div class="wrapper">
                                        <input type="checkbox" id="type-music" name="type-music">
                                        <span>Для музыкальных инструментов</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-5.jpg" alt="Для ценных бумаг/образцов">
                                    <div class="wrapper">
                                        <input type="checkbox" id="type-paper" name="type-paper">
                                        <span>Для ценных бумаг/образцов</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-6.svg" alt="Для другого">
                                    <div class="wrapper">
                                        <input type="checkbox" id="type-other" name="type-other">
                                        <span>Для другого</span>
                                    </div>
                                </label>
                            </div>
                            <div class="nex-slide-quiz red-button js-to-third">
                                <img src="<?php echo get_template_directory_uri()?>/dist/img/nex-quiz.svg" alt="следующий вопрос">
                                Дальше
                            </div>
                        </div>
                        <div class="test__container-item type-slide type-slide-second">
                            <div class="test__container-count"><p>Вопрос 2 из 4</p></div>
                            <h2 class="test__container-item-title">Какой кейс (кофр) Вам нужен?</h2>
                            <div class="test__container-item-container">
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-2-1.svg" alt="Максимально легкий">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-legkiy" name="need-legkiy">
                                        <span>Максимально легкий</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-2-2.svg" alt="Максимально защищенный">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-defend" name="need-defend">
                                        <span>Максимально защищенный</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-2-3.svg" alt="На колесах">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-koleso" name="need-koleso">
                                        <span>На колесах</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-2-4.svg" alt="С выдвижной ручкой">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-hend" name="need-hendc">
                                        <span>С выдвижной ручкой</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-2-5.svg" alt="Алюминиевый">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-aluminiy" name="need-aluminiy">
                                        <span>Алюминиевый</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-6.svg" alt="Для другого">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-other" name="need-other">
                                        <span>Другой</span>
                                    </div>
                                </label>
                            </div>
                            <div class="nex-slide-quiz red-button js-to-third">
                                <img src="<?php echo get_template_directory_uri()?>/dist/img/nex-quiz.svg" alt="следующий вопрос">
                                Дальше
                            </div>
                        </div>
                        <div class="test__container-item type-slide type-slide-third">
                            <div class="test__container-count"><p>Вопрос 3 из 4</p></div>
                            <h2 class="test__container-item-title">Какое количество кейсов (кофров) Вам нужно?</h2>
                            <div class="test__container-item-container">
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-3-1.svg" alt="1 шт<">
                                    <div class="wrapper">
                                        <input type="checkbox" id="tiraj-1" name="tiraj-1">
                                        <span>1 шт</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-3-2.svg" alt="2-5 шт">
                                    <div class="wrapper">
                                        <input type="checkbox" id="tiraj-2-5" name="tiraj-2-5">
                                        <span>2-5 шт<</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-3-3.svg" alt="6-20 шт">
                                    <div class="wrapper">
                                        <input type="checkbox" id="tiraj-6-20" name="tiraj-6-20">
                                        <span>6-20 шт</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-3-4.svg" alt="21-50 шт">
                                    <div class="wrapper">
                                        <input type="checkbox" id="tiraj-21-50" name="tiraj-21-50">
                                        <span>21-50 шт</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-3-5.svg" alt=">50 шт">
                                    <div class="wrapper">
                                        <input type="checkbox" id="tiraj-50more" name="tiraj-50more">
                                        <span>Больше 50 шт</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-6.svg" alt="Пока не знаю">
                                    <div class="wrapper">
                                        <input type="checkbox" id="need-other" name="need-other">
                                        <span>Пока не знаю</span>
                                    </div>
                                </label>
                            </div>
                            <div class="nex-slide-quiz red-button js-to-four">
                                <img src="<?php echo get_template_directory_uri()?>/dist/img/nex-quiz.svg" alt="следующий вопрос">
                                Дальше
                            </div>
                        </div>
                        <div class="test__container-item type-slide type-slide-fifth">
                            <div class="test__container-count"><p>Вопрос 4 из 4</p></div>
                            <h2 class="test__container-item-title">Каким способом удобно забрать кейсы (кофры)?</h2>
                            <div class="test__container-item-container">
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-4-1.svg" alt="Самовывоз со склада в г.Минске<">
                                    <div class="wrapper">
                                        <input type="checkbox" id="get-sam" name="get-sam">
                                        <span>Самовывоз со склада в г.Минске</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-4-2.svg" alt="Доставка по г.Минску">
                                    <div class="wrapper">
                                        <input type="checkbox" id="get-minsk" name="get-sam">
                                        <span>Доставка по г.Минску</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-4-3.svg" alt="Доставка по Беларуси">
                                    <div class="wrapper">
                                        <input type="checkbox" id="get-belarus name="get-sam">
                                        <span>Доставка по Беларуси</span>
                                    </div>
                                </label>
                                <label>
                                    <img src="<?php echo get_template_directory_uri()?>/dist/img/quize/test-1-6.svg" alt="Пока не знаю">
                                    <div class="wrapper">
                                        <input type="checkbox" id="get-other" name="get-sam">
                                        <span>Пока не знаю</span>
                                    </div>
                                </label>
                            </div>
                            <div class="nex-slide-quiz red-button js-to-four">
                                <img src="<?php echo get_template_directory_uri()?>/dist/img/nex-quiz.svg" alt="следующий вопрос">
                                Дальше
                            </div>
                        </div>
                        <div class="test__container-item type-slide type-slide-sixth">
                            <div class="test__container-item-left">
                                <div class="test__container-count"><p>Спасибо, что ответили на вопросы</p></div>
                                <h2 class="test__container-item-title">Укажите, как Вам удобно, чтобы мы с Вами связались</h2>
                                <div class="test__container-item-container">
                                    <label>
                                        <div class="wrapper">
                                            <input type="radio" id="get-phone" name="get-phone" value="Звонок">
                                            <span class="fon"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 13"><path fill="#1B1918" d="M13.75,11.3a3.65,3.65,0,0,1-2.33,1.64,5.63,5.63,0,0,1-2.13-.1,20.56,20.56,0,0,1-1.93-.77A14.64,14.64,0,0,1,1.45,6.86,6.29,6.29,0,0,1,0,3.29,4.07,4.07,0,0,1,1.16.39a1.07,1.07,0,0,1,1-.39h.68c.19,0,.48-.09.77.58S4.55,3,4.65,3.09a.66.66,0,0,1,0,.58,2,2,0,0,1-.39.58c-.19.19-.39.48-.48.58s-.39.39-.2.68A9.82,9.82,0,0,0,5.52,7.92,10.73,10.73,0,0,0,8.33,9.66a.57.57,0,0,0,.77-.1,9,9,0,0,0,1.07-1.35c.19-.39.48-.29.77-.2s2,1,2.32,1.16a3,3,0,0,1,.68.39A3,3,0,0,1,13.75,11.3Z"/></svg>
                                            <span>Звонок</span>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="wrapper">
                                            <input type="radio" id="get-phone" name="get-phone" value="WhatsApp">
                                            <span class="fon"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15"><path fill="#48C95F" d="M12.8,2.19A7.47,7.47,0,0,0,.05,7.45a7.54,7.54,0,0,0,1,3.7L0,15l4-1a7.69,7.69,0,0,0,3.56.88A7.45,7.45,0,0,0,15,7.4,7.54,7.54,0,0,0,12.8,2.19ZM11.13,10.1A1.93,1.93,0,0,1,9.88,11a3,3,0,0,1-1.15-.05c-.26-.11-.63-.21-1.05-.42A8,8,0,0,1,4.49,7.71a3.42,3.42,0,0,1-.78-1.93,2.16,2.16,0,0,1,.63-1.56A.56.56,0,0,1,4.86,4h.37c.1,0,.26,0,.41.31s.53,1.31.58,1.36a.34.34,0,0,1,0,.31A1.13,1.13,0,0,1,6,6.3l-.26.31c-.11.11-.21.21-.11.37a5.17,5.17,0,0,0,1.05,1.3,5.78,5.78,0,0,0,1.52.94.31.31,0,0,0,.41-.05,4.65,4.65,0,0,0,.58-.73c.1-.21.26-.16.42-.11s1.09.52,1.25.63a1.44,1.44,0,0,1,.37.21A1.59,1.59,0,0,1,11.13,10.1Z"/></svg>
                                            <span>WhatsApp</span>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="wrapper">
                                            <input type="radio" id="get-phone" name="get-phone" value="Viber">
                                            <span class="fon"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 17"><path fill="#7C509A" d="M12.38.4A24.66,24.66,0,0,0,3.56.4a4.92,4.92,0,0,0-3.18,3,16.2,16.2,0,0,0,0,7,5.16,5.16,0,0,0,3.18,3,.11.11,0,0,1,.11.1v3.39a.19.19,0,0,0,.34.11l1.67-1.67,1.57-1.56a.18.18,0,0,1,.11,0,27.23,27.23,0,0,0,5.08-.38,4.9,4.9,0,0,0,3.18-3,16.16,16.16,0,0,0,0-7A5.17,5.17,0,0,0,12.38.4Zm.06,10.12a2.56,2.56,0,0,1-1.17,1.24l-.51.16-.55-.16A13.2,13.2,0,0,1,5.4,8.69,13.07,13.07,0,0,1,3.56,6,15.24,15.24,0,0,1,3,4.6a1.2,1.2,0,0,1,.39-1.18,2.49,2.49,0,0,1,1-.7.62.62,0,0,1,.78.16A10.87,10.87,0,0,1,6.35,4.55a.75.75,0,0,1-.22,1.07,1.08,1.08,0,0,0-.28.22c-.06,0-.17.1-.22.21a.49.49,0,0,0-.06.49A4.57,4.57,0,0,0,8.14,9.28a1.33,1.33,0,0,0,.67.16c.39,0,.56-.48.84-.7a.88.88,0,0,1,.95-.05c.28.16.56.38.89.59s.56.38.84.59A.53.53,0,0,1,12.44,10.52Zm-2.35-4h0c-.22,0-.27-.1-.33-.27a.8.8,0,0,0-.06-.37.94.94,0,0,0-.39-.59L9,5.08a1.38,1.38,0,0,0-.45,0,.29.29,0,0,1-.22-.32c0-.11.16-.22.28-.22a1.64,1.64,0,0,1,1.67,1.56v.22C10.26,6.38,10.21,6.48,10.09,6.48ZM9.54,4.12a4,4,0,0,0-.9-.27c-.11,0-.28-.06-.39-.06S8,3.69,8,3.52a.2.2,0,0,1,.28-.21,4.82,4.82,0,0,1,1.56.38A3,3,0,0,1,11.6,6.05v.7a.26.26,0,0,1-.5,0S11,6.59,11,6.54a3.07,3.07,0,0,0-.33-1.4A3,3,0,0,0,9.54,4.12Zm3,3.22A.3.3,0,0,1,12.27,7a5.44,5.44,0,0,0-.11-1A4.06,4.06,0,0,0,8.75,2.66c-.28-.05-.55-.05-.78-.1s-.39,0-.44-.22S7.64,2,7.8,2h.12c2.29,0,.11,0,0,0a4.69,4.69,0,0,1,4.69,3.82A8.46,8.46,0,0,1,12.72,7,.2.2,0,0,1,12.55,7.34Z"/></svg>
                                            <span>Viber</span>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="wrapper">
                                            <input type="radio" id="get-phone" name="get-phone" value="Telegram">
                                            <span class="fon"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 14"><path fill="#2F89CE" d="M.3,6.72,4.21,8.1l1.52,4.62a.45.45,0,0,0,.73.19l2.18-1.69a.66.66,0,0,1,.8,0l3.91,2.69a.47.47,0,0,0,.73-.25L17,.53A.45.45,0,0,0,16.4,0L.3,5.91A.42.42,0,0,0,.3,6.72Zm5.23.69L13.22,3c.13-.06.26.12.13.19L7.05,8.72a1.11,1.11,0,0,0-.39.75L6.46,11c0,.19-.33.25-.4,0L5.27,8.22A.53.53,0,0,1,5.53,7.41Z"/></svg>
                                            <span>Telegram</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="phone">
                                    <input type="phone" id="form-phone" name="form-phone">
                                    <button class="red-button" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 25"><path fill="#FFF" d="M15.52,25h-12A3.41,3.41,0,0,1,0,21.68V3.32A3.41,3.41,0,0,1,3.48,0h12A3.41,3.41,0,0,1,19,3.32V21.68A3.41,3.41,0,0,1,15.52,25ZM3.48,2A1.31,1.31,0,0,0,2.14,3.32V21.68A1.31,1.31,0,0,0,3.48,23h12a1.31,1.31,0,0,0,1.34-1.28V3.32A1.31,1.31,0,0,0,15.52,2Z"/><path fill="#FFF" d="M9.5,20.54a1.15,1.15,0,1,1,1.2-1.15A1.18,1.18,0,0,1,9.5,20.54Zm0-1.28a.13.13,0,0,0-.13.13c0,.14.26.14.26,0A.13.13,0,0,0,9.5,19.26Z"/></svg>
                                        Получить расчет
                                    </button>
                                </div>
                            </div>
                            <div class="test__container-item-right">
                                <div class="test__content">
                                    <div class="test__small-title">
                                        Вы получите
                                    </div>
                                    <div class="test__desc">
                                        <?php

                                        if (have_rows('opisanie_bloka_test', 2)):

                                            while (have_rows('opisanie_bloka_test', 2)) : the_row();

                                                $testtitle = get_sub_field('punkt_opisaniya', 2);
                                                ?>
                                                <div class="test__item">
                                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path d="M30.4764 15.9421C30.7424 16.9807 30.8981 18.0637 30.8981 19.1839C30.8981 26.4277 25.0061 32.3194 17.7627 32.3194C10.5194 32.3194 4.62604 26.4277 4.62604 19.1839C4.62604 11.9404 10.5194 6.04711 17.7627 6.04711C19.6088 6.04711 21.3642 6.43445 22.9598 7.12452L24.9126 3.98547C22.7395 2.95871 20.3216 2.36682 17.7627 2.36682C8.48971 2.36682 0.945312 9.91121 0.945312 19.1839C0.945312 28.4558 8.48971 36.0001 17.7627 36.0001C27.0343 36.0001 34.5785 28.4558 34.5785 19.1839C34.5785 16.6068 33.9784 14.1726 32.9387 11.9873L30.4764 15.9421Z"
                                                                  fill="black"/>
                                                            <path d="M33.6082 0.463446C32.1706 -0.430524 30.2789 0.0078258 29.3838 1.44543L17.1888 21.0422L13.1036 15.2162C12.1321 13.83 10.2175 13.4944 8.83123 14.466C7.44528 15.439 7.10845 17.3508 8.08122 18.7383L14.8297 28.3625C15.4051 29.1818 16.343 29.6683 17.341 29.6683C17.3685 29.6683 17.3974 29.6683 17.4249 29.667C18.4539 29.6383 19.4007 29.0959 19.9443 28.222L34.5909 4.68767C35.4869 3.24847 35.0459 1.358 33.6082 0.463446Z"
                                                                  fill="#D62D30"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="36" height="36" fill="white"
                                                                      transform="translate(0 0.00012207)"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span><?php echo $testtitle; ?></span>
                                                </div>
                                            <?php
                                            endwhile;
                                        else :
                                        endif;
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="features">
                <h2 class="features__title section-title">
                    <?php the_field('zagolovok_bloka_osobennosti', 2); ?>
                </h2>
                <div class="features__tabs">
                    <?php
                    $tabcount = 1;
                    if (have_rows('vkladki_bloka_osobennosti', 2)):
                        while (have_rows('vkladki_bloka_osobennosti', 2)) : the_row();
                            $tabitem = get_sub_field('nazvanie_taby_knopki', 2);
                            ?>
                            <div class="features__tab-item <?php if ($tabcount == 1) {
                                echo 'active-tab';
                            } ?>" data-count="<?php echo 'tab-count-' . $tabcount . '' ?>">
                                <?php echo $tabitem; ?>
                            </div>
                            <?php
                            $tabcount++;
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="features__content">
                    <?php
                    $tabcount = 1;
                    if (have_rows('vkladki_bloka_osobennosti', 2)):
                        while (have_rows('vkladki_bloka_osobennosti', 2)) : the_row();
                            $tabtitle = get_sub_field('zagolovok_blya_opisaniya_taby', 2);
                            $tabcont = get_sub_field('opisanie_taby', 2);
                            $tabimage = get_sub_field('kartinka_dlya_opisaniya_taby', 2);
                            $tablnk = get_sub_field('ssylka_na_knopku_v_opisanii_taby', 2);
                            ?>
                            <div class="tab-item <?php if ($tabcount == 1) {
                                echo 'active-tab';
                            } ?>" data-count="<?php echo 'tab-count-' . $tabcount . '' ?>">
                                <div class="tab-item__left">
                                    <div class="tab-item__title">
                                        <?php echo $tabtitle ?>
                                    </div>
                                    <div class="tab-item__desc">
                                        <?php echo $tabcont ?>
                                    </div>
                                    <div class="tab-item__lnk">
                                        <a class="red-button" href=" <?php echo $tablnk ?>">Перейти в каталог</a>
                                    </div>
                                </div>
                                <div class="tab-item__image">
                                    <img src="<?php echo $tabimage ?>" alt="<?php echo $tabtitle ?>">
                                </div>
                            </div>
                            <?php
                            $tabcount++;
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="crash"
                 style="background-image: url(<?php echo the_field('kartinka_zadnij_plan_bloka_krash_-_test', 2); ?>)">
            <div class="crash__wrapper">
                <h2 class="crash__title section-title">
                    <?php echo the_field('zagolovok_bloka_krash_-_test', 2); ?>
                </h2>
                <div class="crash__video">
                    <?php echo the_field('ssylka_na_video_bloka_krash_-_test', 2); ?>
                </div>
                <div class="crash__desc">
                    <?php echo the_field('opisanie_bloka_krash_-_test', 2); ?>
                </div>
            </div>
        </section>
        <section class="finishing">
            <h2 class="finishing__title section-title">
                <?php echo the_field('zagolovok_dlya_bloka_varianty_otdelki', 2); ?>
            </h2>
            <div class="finishing__slider">
                <div class="finishing__slider-img swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        if (have_rows('slajder_dlya_bloka_varianty_otdelki', 2)):
                            while (have_rows('slajder_dlya_bloka_varianty_otdelki', 2)) : the_row();
                                $tabtitle = get_sub_field('zagolovok_dlya_slajda_varianty_otdelki', 2);
                                $tabimage = get_sub_field('kartinka_slajda_varianty_otdelki', 2);
                                ?>
                                <div class="finishing__slider-img-item swiper-slide">
                                    <img src="<?php echo $tabimage ?>" alt="<?php echo $tabtitle ?>">
                                </div>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
                <div class="finishing__slider-text  swiper-container">
                    <div class="finishing__content-slide swiper-wrapper">
                        <?php
                        if (have_rows('slajder_dlya_bloka_varianty_otdelki', 2)):
                            while (have_rows('slajder_dlya_bloka_varianty_otdelki', 2)) : the_row();
                                $slidetitle = get_sub_field('zagolovok_dlya_slajda_varianty_otdelki', 2);
                                $slidecont = get_sub_field('opisanie_dlya_slajda_varianty_otdelki', 2);
                                ?>
                                <div class="swiper-slide">
                                    <div class="title">
                                        <?php echo $slidetitle ?>
                                    </div>
                                    <div class="desc">
                                        <?php echo $slidecont ?>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
                <div class="finishing__slider-nav">
                    <div class="slick-prev">
                        <svg width="28" height="53" viewBox="0 0 28 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.13055e-06 26.4871C-0.000543282 26.1813 0.121891 25.8878 0.340519 25.6713L25.993 0.323442C26.4562 -0.118669 27.1944 -0.105924 27.6418 0.351742C28.0782 0.798281 28.0782 1.50611 27.6418 1.95254L2.81485 26.487L27.6441 51.0191C28.1072 51.4612 28.12 52.1905 27.6727 52.6483C27.2253 53.106 26.4872 53.1186 26.0239 52.6766C26.0142 52.6673 26.0047 52.6579 25.9953 52.6483L0.342816 27.3005C0.123968 27.0849 0.000768981 26.7923 4.13055e-06 26.4871Z"
                                  fill="black"/>
                        </svg>
                    </div>
                    <div class="slick-next">
                        <svg width="28" height="53" viewBox="0 0 28 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 26.5129C28.0005 26.8187 27.8781 27.1122 27.6595 27.3287L2.00701 52.6766C1.54385 53.1187 0.805646 53.1059 0.358223 52.6483C-0.0781602 52.2017 -0.0781602 51.4939 0.358223 51.0475L25.1852 26.5131L0.355927 1.98092C-0.107238 1.5388 -0.120028 0.809479 0.327287 0.351704C0.77471 -0.105961 1.5128 -0.118599 1.97608 0.323406C1.98581 0.332695 1.99531 0.342091 2.00472 0.351704L27.6572 25.6995C27.876 25.9151 27.9992 26.2077 28 26.5129Z"
                                  fill="black"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section class="scope">
            <div class="scope__left-img">
                <img src="<?php echo the_field('levaya_kartinka_v_bloke_sfery_primeneniya', 2); ?>"
                     alt="<?php echo the_field('zagolovok_sfery_primeneniya', 2); ?>">
            </div>
            <div class="scope__right-img">
                <img src="<?php echo the_field('pravaya_kartinka_v_bloke_sfery_primeneniya', 2); ?>"
                     alt="<?php echo the_field('zagolovok_sfery_primeneniya', 2); ?>">
            </div>
            <div class="scope__container">
                <h2 class="scope__title section-title">
                    <?php echo the_field('zagolovok_sfery_primeneniya', 2); ?>
                </h2>
                <div class="scope__wrapper">
                    <?php
                    $args = array(
                        'parent' => '20',
                        'hide_empty' => false,
                        'orderby' => 'id',
                        'order' => 'ASC',
                    );
                    $terms = get_terms('product_cat', $args);
                    if ($terms) {
                        foreach ($terms as $term) {
                            echo '<a href="' . esc_url(get_term_link($term)) . '" class="scope__item">';
                            echo '<div class="scope__img">';
                            woocommerce_subcategory_thumbnail($term);
                            echo '</div>';
                            echo '<h2 class="scope__item-title">';
                            echo $term->name;
                            echo '</h2>';
                            echo '</a>';
                        }
                    }
                    ?>
                </div>
                <div class="scope__section-lnk">
                    <a class="red-button" href="<?php echo the_field('ssylka_na_knopku_sfery_primeneniya', 2); ?>">Перейти
                        в каталог</a>
                </div>
            </div>
        </section>
        <section class="photogalery swiper-container">
            <div class="photogalery__wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'photogalery',
                    'showposts' => "", //сколько показать статей
                    'orderby' => "data", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        $post_id = get_the_ID();
                        $image = get_field('fotogalereya_slajd', $post_id);
                        ?>
                        <div class="photogalery__item swiper-slide">
                            <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php }
                }
                wp_reset_query(); ?>
            </div>
            <div class="photogalery__navigate swiper__navigate">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>

            </div>
            <div class="photogalery__section-lnk">
                <a class="red-button" href="<?php echo the_field('ssylka_na_knopku_fotogalereya', 2); ?>">Перейти в фотогалерею</a>
            </div>
        </section>
        <section class="testimonial">
            <h2 class="testimonial__title section-title">
                <?php echo the_field('zagolovok_dlya_sekczii_otzyvy', 2); ?>
            </h2>
            <div class="testimonial__content">
                <div class="testimonial__abs-img">
                    <img src="<?php echo the_field('ukazhite_kartinku_v_levoj_chasti', 2); ?>" alt="">
                </div>
                <div class="testimonial__desc">
                    <h3><?php echo the_field('ukazhite_opisanie_bloka_otzyvy', 2); ?></h3>
                    <div class="testimonial__descript">
                        <?php echo the_field('podopisanie_dlya_bloka_otzyvy', 2); ?>
                    </div>
                    <div class="testimonial__btn red-button js-reviewe">
                        ОСТАВИТЬ ОТЗЫВ
                    </div>
                </div>
                <div class="testimonial__list">
                    <div class="testimonial__wrapper">
                        <?php echo do_shortcode( '[testimonial_view id="1"]' ); ?>
                    </div>
                    <div class="testimonial__navigate">
                        <div class="testimonial__prev">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.293347 8.99521C0.293164 8.89136 0.33425 8.79169 0.407617 8.71818L9.01595 0.109843C9.17138 -0.0403011 9.4191 -0.0359724 9.56924 0.119454C9.71568 0.271103 9.71568 0.511488 9.56924 0.663099L1.23794 8.99517L9.57001 17.3265C9.72544 17.4766 9.72973 17.7243 9.57962 17.8798C9.42948 18.0352 9.18179 18.0395 9.02633 17.8894C9.02307 17.8862 9.01988 17.883 9.01672 17.8798L0.408386 9.27147C0.334947 9.19825 0.293604 9.09888 0.293347 8.99521Z" fill="black"/>
                            </svg>
                        </div>
                        <span class="devider"></span>
                        <div class="testimonial__next">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.119477 0.674273L8.45155 9.00558L0.119477 17.3369C-0.0306674 17.4923 -0.0263388 17.74 0.129088 17.8902C0.280736 18.0366 0.521121 18.0366 0.672733 17.8902L9.28107 9.28184C9.43382 9.12905 9.43382 8.88137 9.28107 8.72854L0.672733 0.120209C0.522588 -0.0352173 0.274904 -0.0395088 0.11944 0.110598C-0.0359863 0.260742 -0.0402783 0.508429 0.109829 0.663891C0.112984 0.667156 0.116176 0.670347 0.11944 0.673502L0.119477 0.674273Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="consult">
            <h2 class="consult__title section-title">
                <?php echo the_field('zagolovok_bloka_konsultacziya', 2); ?>
            </h2>
            <div class="consult__content">
                <?php echo the_field('opisanie_bloka_konsultacziya', 2); ?>
            </div>
            <div class="consult__lnk red-button js-call">Задать вопрос</div>
        </section>
    </main><!-- #main -->
<?php
get_footer();
