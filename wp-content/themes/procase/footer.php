<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProCase
 */

?>

	<footer id="footer" class="footer">
        <div class="footer__container">
            <div class="footer__logo-part">
                <?php
                the_custom_logo();
                ?>
                <div class="desc">
                    Производство кейсов и кофров с 2010 г.
                    Доставка по всей Беларуси
                </div>
                <div class="socials">
                    <div class="socials__title">
                        Мы в социальных сетях
                    </div>
                    <div class="socials__wrapper">
                        <a href="<?php echo the_field('adres_facebook', 2); ?>">
                            <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 26H14V17.0625H10.5V13H14V9.75C14 7.05683 16.3497 4.875 19.25 4.875H22.75V8.9375H21C20.034 8.9375 19.25 8.853 19.25 9.75V13H23.625L21.875 17.0625H19.25V26H24.5C26.4297 26 28 24.5418 28 22.75V3.25C28 1.45708 26.4297 0 24.5 0H3.5C1.56917 0 0 1.45708 0 3.25V22.75C0 24.5418 1.56917 26 3.5 26Z" fill="#F5E6E4"/>
                            </svg>
                        </a>
                        <a href="<?php echo the_field('adres_vkontakte', 2); ?>">
                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4044 9.11399C21.9679 8.58316 22.0928 8.34699 22.4044 7.87249C22.41 7.86708 26.0134 3.07224 26.3846 1.44616L26.3869 1.44508C26.5714 0.852492 26.3869 0.416992 25.4948 0.416992H22.5428C21.7913 0.416992 21.4448 0.790742 21.2591 1.20891C21.2591 1.20891 19.7561 4.67341 17.6299 6.91916C16.9436 7.56808 16.6264 7.77608 16.2518 7.77608C16.0673 7.77608 15.7804 7.56808 15.7804 6.97549V1.44508C15.7804 0.734409 15.57 0.416992 14.9479 0.416992H10.3061C9.83475 0.416992 9.55463 0.748492 9.55463 1.05724C9.55463 1.73108 10.6178 1.88599 10.728 3.78183V7.89524C10.728 8.79658 10.5581 8.96233 10.1813 8.96233C9.17775 8.96233 6.74213 5.48374 5.29875 1.50249C5.00738 0.730075 4.72275 0.418075 3.96563 0.418075H1.0125C0.169875 0.418075 0 0.791825 0 1.20999C0 1.94883 1.0035 5.62241 4.6665 10.4757C7.10775 13.7886 10.5458 15.5837 13.6733 15.5837C15.5531 15.5837 15.7826 15.185 15.7826 14.4992C15.7826 11.3337 15.6128 11.0347 16.5544 11.0347C16.9909 11.0347 17.7424 11.2427 19.4974 12.8407C21.5033 14.7354 21.8329 15.5837 22.9556 15.5837H25.9076C26.7491 15.5837 27.1755 15.185 26.9303 14.3985C26.3689 12.7442 22.5754 9.34149 22.4044 9.11399Z" fill="#F5E6E4"/>
                            </svg>
                        </a>
                        <a href="<?php echo the_field('adres_instagram', 2); ?>">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.0043 6.32432C10.3177 6.32432 7.3331 9.31216 7.3331 12.9955C7.3331 16.6821 10.3209 19.6667 14.0043 19.6667C17.6909 19.6667 20.6754 16.6788 20.6754 12.9955C20.6754 9.30891 17.6876 6.32432 14.0043 6.32432ZM14.0043 17.3256C11.6112 17.3256 9.67419 15.3875 9.67419 12.9955C9.67419 10.6035 11.6123 8.66541 14.0043 8.66541C16.3963 8.66541 18.3344 10.6035 18.3344 12.9955C18.3354 15.3875 16.3974 17.3256 14.0043 17.3256Z" fill="#F5E6E4"/>
                                <path d="M19.3594 0.0845986C16.9674 -0.0269848 11.0426 -0.0215681 8.64844 0.0845986C6.54461 0.183182 4.68886 0.691265 3.19278 2.18735C0.692442 4.68768 1.01203 8.05685 1.01203 12.9979C1.01203 18.0549 0.730359 21.3461 3.19278 23.8085C5.70286 26.3175 9.12078 25.9893 14.0034 25.9893C19.0127 25.9893 20.7417 25.9925 22.5129 25.3068C24.9212 24.3719 26.739 22.2193 26.9167 18.3529C27.0294 15.9598 27.0229 10.0361 26.9167 7.64193C26.7022 3.07785 24.2528 0.309932 19.3594 0.0845986ZM23.1456 22.1543C21.5065 23.7934 19.2326 23.6471 13.9719 23.6471C8.55528 23.6471 6.38319 23.7273 4.79828 22.138C2.97286 20.3213 3.30328 17.4039 3.30328 12.9806C3.30328 6.99518 2.68903 2.6846 8.69611 2.37693C10.0763 2.32818 10.4825 2.31193 13.9568 2.31193L14.0055 2.34443C19.7786 2.34443 24.308 1.73993 24.5799 7.74593C24.6417 9.11635 24.6558 9.52802 24.6558 12.9969C24.6547 18.3507 24.7565 20.5358 23.1456 22.1543Z" fill="#F5E6E4"/>
                                <path d="M20.9397 7.6204C21.8007 7.6204 22.4986 6.92245 22.4986 6.06148C22.4986 5.20052 21.8007 4.50257 20.9397 4.50257C20.0788 4.50257 19.3808 5.20052 19.3808 6.06148C19.3808 6.92245 20.0788 7.6204 20.9397 7.6204Z" fill="#F5E6E4"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__adress-part">
                <div class="footer__adress-row">
                    <div class="row_title">Офис</div>
                    <div class="row_content">
                        <?php echo the_field('adres_ofis', 'options'); ?>
                    </div>
                </div>
                <div class="footer__adress-row">
                    <div class="row_title">Производство</div>
                    <div class="row_content">
                        <?php echo the_field('adres_proizvodstva', 'options'); ?>
                    </div>
                </div>
                <div class="footer__adress-row">
                    <div class="row_title">Склад</div>
                    <div class="row_content">
                        <?php echo the_field('adres_sklada', 'options'); ?>
                    </div>
                </div>
            </div>
            <div class="footer__contacts-part">
                <div class="contacts-title">
                    Связаться с нами:
                </div>
                <div class="footer__nav-phone">
                    <a href="tel:<?php the_field('telefon_1', 'option'); ?>"><?php the_field('telefon_1', 'option'); ?></a>
                    <a href="tel:<?php the_field('telefon_2', 'option'); ?>"><?php the_field('telefon_2', 'option'); ?></a>
                </div>
                <div class="footer__nav-button js-call red-button">
                    заказать звонок
                </div>
                <a class="footer__email" href="mailto:<?php the_field('e-mail', 'option'); ?>"><?php the_field('e-mail', 'option'); ?></a>
            </div>
        </div>
	</footer>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/selectric@1.13.0/public/jquery.selectric.min.js" defer></script>

<?php wp_footer(); ?>

</body>
</html>
