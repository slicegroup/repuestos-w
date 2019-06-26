$(document).ready(function () {
    $(".single-item").slick({
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 500,
        infinite: true,
        cssEase: 'linear',
        fade: true,
        arrows: false,
        // revArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
        // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
        dots: true,
    });
});

$(".single-item-two").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    cssEase: 'linear',
    fade: true,
    arrows: true,
    dots: false,
    slidesToShow: 6,
    slidesToScroll: 1,
});

$(".single-item-three").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    cssEase: 'linear',
    fade: true,
    arrows: false,
    dots: true,
});

$('.multiple-items').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    responsive: [
        {
            breakpoint: 700,
            settings: {
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }
    ]
});

$('.multiple-items-two').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 500,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 700,
            settings: {
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        }
    ]
});

$('.slider-for').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    focusOnSelect: true
});

$('.single-item-rtl').slick({
    rtl: false
});



