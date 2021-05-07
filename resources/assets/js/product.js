$(document).ready(function () {
    if (window.location.href.replace(https, '').includes('product/')) {
        $('#sliderRelated').slick({
            dots: false,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            adaptiveHeight: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            swipe: true,
            pauseOnHover: false,
            pauseOnDotsHover: false,
            pauseOnFocus: false,
            prevArrow: $('.sectionRelatedProduct .arrowLeft'),
            nextArrow: $('.sectionRelatedProduct .arrowRight'),
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

        if ($(window).width() > 600) {
            $('#sliderBig').slick({
                dots: false,
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
                asNavFor: '#sliderSmall',
                //lazyLoad: 'ondemand',
            });
            $('#sliderSmall').slick({
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: true,
                arrows: false,
                autoplay: false,
                autoplaySpeed: 4000,
                swipe: true,
                pauseOnHover: false,
                pauseOnDotsHover: false,
                pauseOnFocus: false,
                asNavFor: '#sliderBig',
                vertical: true,
                verticalSwiping: true,
                centerMode: true,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            vertical: false,
                            verticalSwiping: false,
                            centerMode: true,
                        }
                    },
                ]
            });
        }else{
            $('#sliderBig_mobile').slick({
                dots: false,
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
                asNavFor: '#sliderSmall_mobile',
                //lazyLoad: 'ondemand',
            });
            $('#sliderSmall_mobile').slick({
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: true,
                arrows: false,
                autoplay: false,
                autoplaySpeed: 4000,
                swipe: true,
                pauseOnHover: false,
                pauseOnDotsHover: false,
                pauseOnFocus: false,
                asNavFor: '#sliderBig_mobile',
                vertical: true,
                verticalSwiping: true,
                centerMode: true,
                focusOnSelect: true,
                //lazyLoad: 'ondemand',
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            vertical: false,
                            verticalSwiping: false,
                            centerMode: true,
                        }
                    },
                ]
            });
        }
    }
});
