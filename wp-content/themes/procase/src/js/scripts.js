jQuery(document).ready(function($) {

    window.onload = function () {
        DublicateHeight();
    }
    $( window ).resize(function() {
        DublicateHeight();
    });
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
                },
                500: {
                    slidesPerView: 2.2,
                },
                300: {
                    slidesPerView: 1.2,
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
            // grabCursor: true,
            // effect: 'coverflow',
            // coverflowEffect:{
            //     stretch: 50,
            //     slideShadows: true,
            // },
            pagination: {
                el: '.photogalery .swiper-pagination',
                type: 'fraction',
                clickable: true,
            },

            navigation: {
                nextEl: '.photogalery .swiper-button-next',
                prevEl: '.photogalery .swiper-button-prev',
            },
            breakpoints: {
                900: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                240: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    centeredSlides: false,
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
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });
    }

    if ($('.product-quantity').length){
        $( ".product-quantity" ).each(function( index ) {
            let elem = $(this).find('input').closest('.quantity');
            $(elem).append('<div class="number"></div>')
            $(elem).find('.number').append('<button class="number-minus" type="button">-</button>')
            $(this).find('.number').append($(this).find('.input-text'));
            $(elem).find('.number').append('<button class="number-plus" type="button">+</button>')
        });

        $( ".number-plus, .number-minus" ).click(function() {
            $('td.actions .button').removeAttr('disabled');
        });
    }
    if ($('.quantity div.number').length){
        $( '.quantity div.number' ).each(function( index ) {
            let col = $(this).find('input');
            let plus = $(this).find('.number-plus');
            let minus = $(this).find('.number-minus');
            plus.click(function() {
                col.val(parseInt(col.val())+1);
                var check = col.val();
                if (check > 1){
                    minus.removeClass('disable');
                }
            });
            minus.click(function() {
                var check = col.val();
                if (check > 1){
                    col.val(parseInt(col.val())-1);
                    minus.removeClass('disable');
                } else {
                    minus.addClass('disable');
                }

            });
        });
    }
    $('select').selectric();

    if ($('.product-categories').length){
        $('.product-categories .cat-parent').on('click', function(){
            $(this).find('ul.children').fadeToggle(300);
        });
    }
});