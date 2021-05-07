$(document).ready(function () {
    if(window.location.href.replace(https,'') == '') {
        $('#sliderBanner').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
            cssEase: 'easeOutElastic',
            fade: true,
            swipe: true,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            pauseOnFocus: false,
        });
        /*
        $('#sliderUltimate').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: true,
            autoplay: false,
            autoplaySpeed: 4000,
            swipe: true,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            pauseOnFocus: false,
            prevArrow: $('.sectionUltimateHome .arrowLeft'),
            nextArrow: $('.sectionUltimateHome .arrowRight'),
            lazyLoad: 'ondemand',
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
            ]
        });
         */
        $('#sliderArtist').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: true,
            autoplay: false,
            autoplaySpeed: 4000,
            swipe: true,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            pauseOnFocus: false,
            prevArrow: $('.sectionArtistHome .arrowLeft'),
            nextArrow: $('.sectionArtistHome .arrowRight'),
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
            ]
        });
    }
});
