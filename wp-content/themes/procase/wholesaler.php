<?php
/**
 * Template Name: Оптовикам
 *
 */

get_header();

?>
    <main id="wholesaler" class="wholesaler">
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
                        <?php the_field('podzagolovok_dlya_shapki_optovikam')?>
                    </div>
                </div>
            </section>
            <section class="wholesaler__conditions procase-container">
                <h2 class="wholesaler__conditions-title section-title">
                    <?php the_field('zagolovok_dlya_bloka_usloviya')?>
                </h2>
                <div class="wholesaler__conditions-content">
                    <div class="wholesaler__conditions-item">
                        <?php the_field('pervoe_opisanie_dlya_optovikov')?>
                    </div>
                </div>
            </section>
            <section class="wholesaler__download">
                <div class="wholesaler__download-content procase-container">
                    <a href="<?php the_field('fajl_dlya_skachivaniya')?>" download="">
                        <svg width="220" height="212" viewBox="0 0 220 212" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.02 64.5301C33.3 64.5301 36.09 64.7001 38.86 64.4901C43.4 64.1501 45.08 65.9301 43.59 70.6701C32.59 70.6701 21.51 70.6701 10.39 70.6701C9.03 66.2301 10.39 64.2001 15.04 64.5001C17.82 64.6801 20.63 64.5301 24.02 64.5301C24.02 62.2801 24.02 60.4901 24.02 58.7101C24.02 45.3801 23.95 32.0401 24.04 18.7101C24.11 6.97006 31.05 0.0400574 42.68 0.0200574C77.02 -0.0099426 111.35 -0.0399426 145.69 0.120057C147.87 0.130057 150.6 1.22006 152.12 2.76006C163.48 14.2601 174.7 25.9001 185.68 37.7601C187.46 39.6901 188.7 42.9201 188.72 45.5601C188.94 71.5501 188.85 97.5401 188.85 124.34C194.64 124.34 200.23 124.32 205.81 124.34C215.62 124.37 219.06 127.79 219.07 137.49C219.08 151.16 219.1 164.83 219.06 178.49C219.04 185.84 215.12 189.9 207.75 190.07C201.62 190.21 195.48 190.1 189.33 190.1C188.87 193.14 188.65 195.77 188.05 198.31C186.23 206.07 179.88 211.33 171.91 211.34C128.24 211.41 84.57 211.42 40.9 211.33C31.16 211.31 24.19 203.81 24.06 193.4C23.91 181.9 24.2 170.39 23.89 158.9C23.81 155.98 22.76 152.71 21.16 150.26C14.9 140.64 8.2 131.3 1.76 121.79C0.9 120.51 0.57 118.87 0 117.4C1.51 116.99 3.07 116.1 4.51 116.26C9.16 116.79 10.15 114.66 9.99 110.46C9.7 102.84 9.91 95.2101 9.91 87.3101C21.42 87.3101 32.48 87.3101 44.09 87.3101C44.09 95.1701 44.27 102.8 44.02 110.41C43.89 114.56 44.91 116.78 49.56 116.25C51.06 116.08 52.65 116.81 54.21 117.13C53.66 118.73 53.43 120.54 52.51 121.9C45.89 131.69 39.03 141.32 32.51 151.16C31.14 153.22 30.19 155.97 30.14 158.43C29.89 169.76 29.99 181.1 30.05 192.43C30.09 200.95 34.45 205.43 42.94 205.45C85.28 205.5 127.62 205.51 169.95 205.45C178.97 205.44 183.11 200.45 182.5 190.11C180.62 190.11 178.68 190.11 176.75 190.11C147.75 190.11 118.74 190.12 89.74 190.11C79.59 190.11 75.95 186.44 75.95 176.26C75.94 163.59 75.95 150.92 75.95 138.26C75.95 128.03 79.56 124.35 89.67 124.35C118.67 124.34 147.68 124.35 176.68 124.35C178.49 124.35 180.29 124.35 182.43 124.35C182.43 97.3601 182.43 70.7901 182.43 43.4801C175.73 43.4801 169.12 43.4901 162.51 43.4801C150.76 43.4501 145.16 37.8401 145.1 26.0201C145.07 19.5501 145.09 13.0801 145.09 6.21006C143.13 6.10006 141.52 5.93006 139.92 5.93006C108.08 5.91006 76.25 5.91006 44.41 5.93006C33.93 5.94006 30.03 9.92006 30.02 20.5001C30.01 33.3301 30.02 46.1701 30.02 59.0001C30.02 60.6301 30.02 62.2501 30.02 64.5301ZM182.59 130.87C181.48 130.67 180.85 130.46 180.22 130.46C149.41 130.44 118.6 130.43 87.79 130.43C83.59 130.43 81.91 132.66 81.93 136.74C82 149.9 81.95 163.05 81.96 176.21C81.97 182.87 83.12 184.05 89.78 184.05C119.09 184.06 148.4 184.06 177.71 184.04C179.3 184.04 180.88 183.87 182.59 183.77C182.59 165.9 182.59 148.61 182.59 130.87Z" fill="black"/>
                            <path d="M10.1099 76.37C21.3499 76.37 32.5799 76.37 43.8199 76.37C43.8299 76.76 43.8399 77.16 43.8499 77.55C32.6099 77.55 21.3699 77.55 10.1299 77.55C10.1199 77.16 10.1199 76.76 10.1099 76.37Z" fill="black"/>
                            <path d="M122.13 142C129.93 142.56 138.55 139.46 143.15 148.05C146.39 154.11 146.56 161.08 142.76 167.07C137.75 174.95 129.57 171.84 122.13 172.36C122.13 162.17 122.13 152.44 122.13 142ZM127.15 168.27C131.89 168.72 137.23 169.42 138.61 164.38C139.87 159.76 139.75 154.13 138.27 149.59C136.74 144.93 131.52 146.04 127.16 146.41C127.15 153.65 127.15 160.73 127.15 168.27Z" fill="black"/>
                            <path d="M93.25 142.2C98.22 142.2 103.03 141.89 107.78 142.29C112.49 142.68 115.42 146.45 115.49 151.21C115.56 155.78 112.96 159.24 108.53 160.28C106.92 160.66 105.25 160.83 103.6 160.94C101.96 161.05 100.3 160.96 97.97 160.96C97.97 163.06 97.97 164.83 97.97 166.6C97.97 168.25 97.97 169.9 97.97 171.95C96.39 172.12 95 172.27 93.26 172.46C93.25 162.27 93.25 152.4 93.25 142.2ZM98.12 158.15C102.54 156.75 106.31 156.02 109.5 154.25C110.35 153.78 110.14 148.65 109.23 148.24C105.93 146.73 102.14 146.31 98.11 145.38C98.12 149.94 98.12 153.06 98.12 158.15Z" fill="black"/>
                            <path d="M152.27 142.24C158.83 142.24 165.08 142.24 171.32 142.24C171.53 146.08 171.53 146.08 166.02 146.09C163.23 146.09 160.45 146.09 157.36 146.09C157.36 149.28 157.36 152 157.36 154.48C160.97 157.37 167.04 152.41 170.46 159.18C165.44 159.18 161.68 159.18 157.3 159.18C157.3 163.62 157.3 167.67 157.3 172.06C155.34 172.18 153.95 172.27 152.27 172.37C152.27 162.3 152.27 152.57 152.27 142.24Z" fill="black"/>
                        </svg>
                        <span>Скачать прайс продукции для оптовых покупателей</span>
                    </a>
                </div>
            </section>
            <section class="wholesaler__form procase-container">
                <h2 class="wholesaler__form-title section-title">
                    <?php the_field('zagolovok_pered_formoj')?>
                </h2>
                <?php echo do_shortcode('[contact-form-7 id="408" title="Фома для Оптовиков"]')?>
            </section>
        </article>
    </main>
<?php

get_footer();
