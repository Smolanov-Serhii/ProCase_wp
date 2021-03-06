jQuery(document).ready(function($) {
    if ($('.burger__button').length){
        $('.burger__button').on('click', function(){
            $('.header__mobile-nav').fadeToggle(300);
            $('.fade-mobile').fadeToggle(300);
            $('body').toggleClass('body-lock');
        });
    }

    if ($('.mobile-filter').length){
        $('.mobile-filter svg').click(function() {
            if ($('.widget-area-fade').length){
                $('.widget-area-fade').fadeIn(300);
            }
            $('.sidebar_container_before_loop .widget-area').fadeIn(300);
        });
    }
    if ($('.filter-close-btn').length){
        $('.filter-close-btn svg').click(function() {
            $('.widget-area-fade').fadeOut(300);
            $('.sidebar_container_before_loop .widget-area').fadeOut(300);
        });
    }

    if ($('select').length){
        $(function() {
            if ($('.single-product').length){
            } else {
                $('select').selectric();
            }
        });
    }

    if ($('.test__slider').length){
        $('.test__slider').slick({
            infinite: false,
            speed: 300,
            lazyLoad: false,
            adaptiveHeight: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            swipe: false,
            swipeToSlide: false,
            touchMove: false,
            draggable: false
        });
        $('.js-to-second, .js-to-third, .js-to-four').on('click', function() {
            $('.test__slider').slick('slickNext');
        });
    }

    if( $(window).width() >= 1401) {
        window.onload = function () {
            DublicateHeight();
        }
        $( window ).resize(function() {
            DublicateHeight();
        });
    }
    function DublicateHeight(){
        var DonorElem = $(".header .container__bg").height();
        var WinHeight = $(window).innerHeight();
        $(".main-page__banner").height(WinHeight - DonorElem);
    }

    if ($('.features__tabs').length){
        $('.features__tabs .features__tab-item').on('click', function(){
            let ClickedNav = $(this).data('count');
            let NeedElem = $( ".features__content .tab-item[data-count='"+ClickedNav+"']" );
            $('.features__tabs .features__tab-item').removeClass('active-tab');
            $(this).addClass('active-tab');
            $('.features__content .tab-item').removeClass('active-tab');
            NeedElem.addClass('active-tab');
        });
    }

    if ($('.finishing').length){
        var CasesSwiper = new Swiper('.finishing__slider-img', {
            slidesPerView: 3,
            spaceBetween: 150,
            loop: true,
            centeredSlides: true,
            navigation: {
                nextEl: '.slick-next',
                prevEl: '.slick-prev',
            },
            breakpoints: {
                900: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                500: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                400: {
                    slidesPerView: 2.6,
                    spaceBetween: 20,
                },
                240: {
                    slidesPerView: 1.6,
                    spaceBetween: 10,
                },

            },
            thumbs: {
                swiper: {
                    el: '.finishing__slider-text',
                    slidesPerView: 1,
                    effect: 'fade',
                }
            }
        });
    }

    if ($('.main-page__banner').length){
        var BanerSwiper = new Swiper('.main-page__banner', {
            slidesPerView: 1,
            loop: true,
            lazy: true,
            autoplay: {
                delay: 5000,
                speed: 600,
            },
            pagination: {
                el: '.main-page__banner .swiper-pagination',
                clickable: true,
            },
        });
    }

    if ($('.photogalery').length){
        const photogaleryslider = new Swiper('.photogalery', {
            slidesPerView: 3,
            spaceBetween: '0',
            observer: true,
            loop: true,
            lazy: true,
            observeParents: true,
            centeredSlides: true,
            // pagination: {
            //     el: '.photogalery .swiper-pagination',
            //     type: 'fraction',
            //     clickable: true,
            // },

            navigation: {
                nextEl: '.photogalery .swiper-button-next',
                prevEl: '.photogalery .swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                900: {
                    slidesPerView: 2.6,
                    spaceBetween: 20,
                },
                500: {
                    slidesPerView: 2.4,
                    spaceBetween: 10,
                },
                240: {
                    slidesPerView: 1.4,
                    spaceBetween: 30,
                }
            }
        });
    }

    if ($('.testimonial__list').length){
        $('.testimonial__list .strong-view > .strong-content').slick({
            infinite: true,
            speed: 300,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            prevArrow: $('.testimonial .testimonial__prev'),
            nextArrow: $('.testimonial .testimonial__next'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });
    }

    if ($('.product-quantity').length){

        $( ".number-plus, .number-minus" ).click(function() {
            $('td.actions .button').removeAttr('disabled');
        });
    }
    function QuantityNum(){
        if ($('.quantity').length){

            $( '.quantity' ).each(function( index ) {
                var col = $(this).find('input');
                var plus = $(this).find('.quantity-arrow-plus');
                var minus = $(this).find('.quantity-arrow-minus');
                var total = col.val();
                plus.click(function() {
                    total++;
                    col.val(total);
                    $('button.button').removeAttr("disabled");
                    if (total > 0){
                        minus.removeClass('disable');
                    }
                    col.attr('value', total);
                    $( '[name="update_cart"]' ).trigger( 'click' );
                    $( '[name="update_wishlist"]' ).trigger( 'click' );
                });
                minus.click(function() {
                    total--;
                    col.val(total);
                    $('button.button').removeAttr("disabled");
                    if (total <= 0){
                        minus.addClass('disable');
                    } else {
                        minus.removeClass('disable');
                    }
                    col.attr('value', total);
                    $( '[name="update_cart"]' ).trigger( 'click' );
                    $( '[name="update_wishlist"]' ).trigger( 'click' );
                });
            });
        }

    }
    QuantityNum();
    $("body").bind("DOMSubtreeModified", function() {
        QuantityNum();
    });
    // $('select').selectric();

    if ($('.product-categories').length){
        $('.product-categories .cat-parent').on('click', function(){
            $(this).find('ul.children').fadeToggle(300);
        });
    }

    if ($('.page-news').length){
        const releatedslider = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: '0',
            observer: true,
            loop: false,
            lazy: true,
            observeParents: true,
            centeredSlides: false,
            breakpoints: {
                900: {
                    slidesPerView: 3.3,
                    spaceBetween: 30,
                },
                240: {
                    slidesPerView: 1.2,
                    spaceBetween: 30,
                    centeredSlides: false,
                }
            }
        });
    }
    if ($('.faq__content').length){
        $('.faq__content .faq__triger').on('click', function(){
            $(this).closest('.faq__item').toggleClass('active');
            $(this).closest('.faq__item').find('.faq__answer').fadeToggle(300);
        });
    }

    if ($('.history__container').length){
        $('.history__container').slick({
            infinite: true,
            speed: 300,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            prevArrow: $('.history__container .testimonial__prev'),
            nextArrow: $('.history__container .testimonial__next')
        });
    }

    if ($('.production').length){
        $('.production__container').slick({
            infinite: false,
            speed: 300,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            prevArrow: $('.production .testimonial__prev'),
            nextArrow: $('.production .testimonial__next')
        });
    }

    if ($('.partners').length){
        const partnerslider = new Swiper('.partners__list', {
            slidesPerView: 4.5,
            spaceBetween: '30',
            observer: true,
            loop: false,
            lazy: true,
            observeParents: true,
            centeredSlides: false,
            // pagination: {
            //     el: '.photogalery .swiper-pagination',
            //     type: 'fraction',
            //     clickable: true,
            // },
            breakpoints: {
                1200: {
                    slidesPerView: 4.5,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 3.5,
                    spaceBetween: 30,
                    centeredSlides: false,
                },
                500: {
                    slidesPerView: 2.5,
                    spaceBetween: 30,
                    centeredSlides: false,
                },
                240: {
                    slidesPerView: 1.2,
                    spaceBetween: 30,
                    centeredSlides: false,
                }
            }
        });
    }

    if ($('#map').length){
        var FirstCoord = 54.830517;
        var SecondCoord = 56.086317;

        var CenterFirstCoord = 54.830517;
        var CenterSecondCoord = 56.086317;

        ymaps.ready(function () {
            var IconUrl = $('div').data('icon');
            var myMap = new ymaps.Map('map', {
                    center: [CenterFirstCoord, CenterSecondCoord],
                    controls: [],
                    zoom: 16
                }, {
                    searchControlProvider: true
                }),

                // Создаём макет содержимого.
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                ),
                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    // Своё изображение иконки метки.
                    iconImageHref: "",
                    // Размеры метки.
                    iconImageSize: [0, 0],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                }),
                myPlacemarkWithContent = new ymaps.Placemark([FirstCoord, SecondCoord], {
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: IconUrl,
                    // Размеры метки.
                    iconImageSize: [72, 87],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-40, -90],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [15, 15],
                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout
                });
            myMap.behaviors.disable('scrollZoom');
            myMap.geoObjects
                // .add(myPlacemark)
                .add(myPlacemarkWithContent);
        });
    }

    if ($('.woocommerce-checkout').length){
        $('#billing_last_name_field').appendTo('.checkout__person');
        $('#billing_first_name_field').appendTo('.checkout__person');
        $('#billing_email_field').appendTo('.checkout__person');
        $('#billing_phone_field').appendTo('.checkout__person');
        $('#shipping_method').appendTo('.checkout__dostavka-select');
        $('#billing_city_field').appendTo('.checkout__dostavka-select');
        $('#billing_address_1_field').appendTo('.checkout__dostavka-select');
        $('#house_field').appendTo('.checkout__dostavka-select');
        $('#flat_field').appendTo('.checkout__dostavka-select');
        $('#payment').appendTo('.checkout__pay-select');
        $('#order_review').appendTo('.checkout__right-column');
        $('.col2-set').appendTo('.checkout__pay-select');
        $('#place_order').appendTo('.checkout__footer-btn');

    }

});