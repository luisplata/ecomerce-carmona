$(document).ready(function () {
    if (window.location.href.replace(https, '').includes('artist/')) {
        $('#sliderObras').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 4000,
            swipe: true,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            pauseOnFocus: false,
        });
    }
});
