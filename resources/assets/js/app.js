'use strict';

var _ = require('lodash');
window.$ = window.jQuery = require('jquery');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

require('materialize-css');
require('slick-carousel');
require('sweetalert');
require('./home');
require('./product');
require('./artist');
require('./sell');
require('./contact');
require('./newsletter');
require('./register');
require('./login');
require('./forget');
require('./buy');
require('./wishes');
require('./shop');
require('./order');
require('./account');
require('./password');

let lazyImages = [...document.querySelectorAll('.lazy')];

function lazyLoad() {
    lazyImages.forEach(image => {
        if(elementVisible(image)){
            image.src = image.dataset.src;
            image.onload = () => image.classList.add('loaded');
        }
    });
}

window.addEventListener('scroll', _.throttle(lazyLoad, 16));
window.addEventListener('resize', _.throttle(lazyLoad, 16));

$(document).ready(function(){
    function cargar(){
        setTimeout(function () {
            $('#loading').css('display','none');
            $('#content').css('visibility','initial');
            $('body').css('overflow-x','visible');
            $('body').css('overflow-y','visible');
            lazyLoad();
            setTimeout(function () {
                //getInstagram();
            },100);
        },0);
    }
    window.load = cargar();
    $('.modal').modal({
        dismissible: false,
    });
    $('.sidenav').sidenav({
        edge: 'right',
    });
    $('.dropdown-trigger').dropdown({
        closeOnClick: false
    });
});

$('.close-menu').click(function () {
    $('.sidenav').sidenav('close');
});

$('.clickAbout').click(function () {
    $('html, body').animate({
        scrollTop: $('#about').offset().top - 100
    }, 1000);
});


function elementVisible(element){
    var visible = true;
    var windowTop = $(document).scrollTop();
    var windowBottom = windowTop + window.innerHeight;
    var elementPositionTop =  $(element).offset().top;
    var elementPositionBottom = elementPositionTop + $(element).height();
    if (elementPositionTop >= windowBottom || elementPositionBottom <= windowTop) {
        visible = false;
    }
    return visible;
}

$(window).scroll(function() {
    if ($(window).width() > 991) {
        if ($(document).scrollTop() > 20) {
            $('.header').addClass('header-shadow');
            //$('.sectionHeader').css('height', '85px', '!important');
            //$('.sectionHeader').css('line-height', '85px', '!important');
        } else {
            if ($(document).scrollTop() >= 0 && $(document).scrollTop() <= 15) {
                $('.header').removeClass('header-shadow');
                //$('.sectionHeader').css('height', '100px', '!important');
                //$('.sectionHeader').css('line-height', '100px', '!important');
            }
        }
    }
});

$('.logOut').click(function () {
    location.href = https + 'logOut';
});

$('.openLogin').click(function () {
   $('#modalLogin').modal('open');
});
$('.openRegister').click(function () {
    $('.modal').modal('close');
    $('#modalRegister').modal('open');
});

$('.modal').click(function (e) {
    if($(e.target).attr('class').includes('modal-content')){
        $('.modal').modal('close');
    }
    if($(e.target).parents('.rowOne').length == 0){
        //$('.modal').modal('close');
    }
});

$('.changePrice').click(function () {
    location.href = https + 'change-price/'+this.id;
});
