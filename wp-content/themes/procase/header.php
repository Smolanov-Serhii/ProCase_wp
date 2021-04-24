<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProCase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="header__mobile-menu">
            <div class="header__burger burger__button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__logo-img">
                <?php
                the_custom_logo();
                ?>
            </div>
            <div class="header__nav-rec">
                <?php
                if (class_exists('WooCommerce' )){
                    global $woocommerce;
                }
                ?>
                <a href="<?php echo $woocommerce->cart->get_cart_url() ?>">
                    <div class="button-icon">
                        <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.4521 17.2142H12.721C11.3162 17.2142 9.81225 16.1347 9.29762 14.7562L5.36506 4.23161C5.15744 3.67577 4.42576 3.15064 3.85916 3.15064H1.03069C0.461511 3.15094 0 2.66435 0 2.06424C0 1.46413 0.461511 0.977539 1.03069 0.977539H3.85944C5.26454 0.977539 6.76816 2.05701 7.28279 3.43548L11.2153 13.9601C11.423 14.516 12.1546 15.0411 12.721 15.0411H22.4521C23.0047 15.0411 23.7016 14.5217 23.8858 13.9728L25.7815 8.32458C25.8346 8.16649 25.8212 8.07014 25.8066 8.04816C25.7918 8.02618 25.7101 7.98101 25.551 7.98101H12.1301C11.5609 7.98101 11.0994 7.49442 11.0994 6.89431C11.0994 6.2942 11.5609 5.80761 12.1301 5.80761H25.551C26.363 5.80761 27.0695 6.16714 27.4899 6.79374C27.91 7.42035 27.9957 8.24237 27.7246 9.04934L25.8289 14.6975C25.3554 16.1085 23.8721 17.2142 22.4521 17.2142Z" fill="white"/>
                            <path d="M10.0719 23.3631C11.3369 23.3631 12.3623 22.2819 12.3623 20.9482C12.3623 19.6145 11.3369 18.5333 10.0719 18.5333C8.80695 18.5333 7.78149 19.6145 7.78149 20.9482C7.78149 22.2819 8.80695 23.3631 10.0719 23.3631Z" fill="white"/>
                            <path d="M24.7575 23.3631C26.0224 23.3631 27.0479 22.2819 27.0479 20.9482C27.0479 19.6145 26.0224 18.5333 24.7575 18.5333C23.4925 18.5333 22.467 19.6145 22.467 20.9482C22.467 22.2819 23.4925 23.3631 24.7575 23.3631Z" fill="white"/>
                            <path d="M22.4155 10.5876H13.3118C13.0271 10.5876 12.7966 10.3441 12.7966 10.0439C12.7966 9.74332 13.0274 9.50006 13.3118 9.50006H22.4155C22.7003 9.50006 22.9307 9.74362 22.9307 10.0439C22.9307 10.3441 22.7003 10.5876 22.4155 10.5876Z" fill="white"/>
                            <path d="M21.7192 13.3042H14.2405C13.9561 13.3042 13.7253 13.0606 13.7253 12.7604C13.7253 12.4599 13.9561 12.2166 14.2405 12.2166H21.7195C22.0043 12.2166 22.2347 12.4602 22.2347 12.7604C22.2344 13.0606 22.004 13.3042 21.7192 13.3042Z" fill="white"/>
                        </svg>
                        <?php
                        if (class_exists('WooCommerce' )){
                            ?>
                            <span class="fix_cart_count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                            <?php
                        }
                        ?>
                    </div>
                </a>
            </div>
        </div>
        <div class="container__bg">
            <div class="header__container procase-container">
                <div class="header__logo">
                    <div class="header__logo-desc">
                        <?php echo $procase_description = get_bloginfo( 'description', 'display' );?>
                    </div>
                    <div class="header__logo-img">
                        <?php
                        the_custom_logo();
                         ?>
                    </div>
                </div>
                <div class="header__nav">
                    <div class="header__nav-top">
                        <nav class="header-info">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-info',
                                    'menu_id'        => 'menu-info',
                                )
                            );
                            ?>
                        </nav>
                    </div>
                    <div class="header__nav-bottom">
                        <div class="header__nav-phone">
                            <a href="tel:<?php the_field('telefon_1', 'option'); ?>"><?php the_field('telefon_1', 'option'); ?></a>
                            <a href="tel:<?php the_field('telefon_2', 'option'); ?>"><?php the_field('telefon_2', 'option'); ?></a>
                        </div>
                        <div class="header__nav-button js-call red-button">
                            заказать звонок
                        </div>
                        <div class="header__nav-rec">
                            <?php
                            if (class_exists('WooCommerce' )){
                                global $woocommerce;
                            }
                            ?>
                            <a href="<?php echo $woocommerce->cart->get_cart_url() ?>">
                                <div class="button-icon">
                                    <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.4521 17.2142H12.721C11.3162 17.2142 9.81225 16.1347 9.29762 14.7562L5.36506 4.23161C5.15744 3.67577 4.42576 3.15064 3.85916 3.15064H1.03069C0.461511 3.15094 0 2.66435 0 2.06424C0 1.46413 0.461511 0.977539 1.03069 0.977539H3.85944C5.26454 0.977539 6.76816 2.05701 7.28279 3.43548L11.2153 13.9601C11.423 14.516 12.1546 15.0411 12.721 15.0411H22.4521C23.0047 15.0411 23.7016 14.5217 23.8858 13.9728L25.7815 8.32458C25.8346 8.16649 25.8212 8.07014 25.8066 8.04816C25.7918 8.02618 25.7101 7.98101 25.551 7.98101H12.1301C11.5609 7.98101 11.0994 7.49442 11.0994 6.89431C11.0994 6.2942 11.5609 5.80761 12.1301 5.80761H25.551C26.363 5.80761 27.0695 6.16714 27.4899 6.79374C27.91 7.42035 27.9957 8.24237 27.7246 9.04934L25.8289 14.6975C25.3554 16.1085 23.8721 17.2142 22.4521 17.2142Z" fill="white"/>
                                        <path d="M10.0719 23.3631C11.3369 23.3631 12.3623 22.2819 12.3623 20.9482C12.3623 19.6145 11.3369 18.5333 10.0719 18.5333C8.80695 18.5333 7.78149 19.6145 7.78149 20.9482C7.78149 22.2819 8.80695 23.3631 10.0719 23.3631Z" fill="white"/>
                                        <path d="M24.7575 23.3631C26.0224 23.3631 27.0479 22.2819 27.0479 20.9482C27.0479 19.6145 26.0224 18.5333 24.7575 18.5333C23.4925 18.5333 22.467 19.6145 22.467 20.9482C22.467 22.2819 23.4925 23.3631 24.7575 23.3631Z" fill="white"/>
                                        <path d="M22.4155 10.5876H13.3118C13.0271 10.5876 12.7966 10.3441 12.7966 10.0439C12.7966 9.74332 13.0274 9.50006 13.3118 9.50006H22.4155C22.7003 9.50006 22.9307 9.74362 22.9307 10.0439C22.9307 10.3441 22.7003 10.5876 22.4155 10.5876Z" fill="white"/>
                                        <path d="M21.7192 13.3042H14.2405C13.9561 13.3042 13.7253 13.0606 13.7253 12.7604C13.7253 12.4599 13.9561 12.2166 14.2405 12.2166H21.7195C22.0043 12.2166 22.2347 12.4602 22.2347 12.7604C22.2344 13.0606 22.004 13.3042 21.7192 13.3042Z" fill="white"/>
                                    </svg>
                                    <?php
                                    if (class_exists('WooCommerce' )){
                                        ?>
                                        <span class="fix_cart_count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                                        <?php
                                    }
                                    ?>
                                </div>
                            <div class="button-text">
                                Корзина
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container__bg second-header">
            <div class="header__container procase-container">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-page',
                        'menu_id'        => 'menu-page',
                    )
                );
                ?>
            </div>
        </div>
    </header>
