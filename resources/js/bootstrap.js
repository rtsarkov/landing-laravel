window._ = require('lodash');
window.axios = require('axios');
const jquery = require("jquery");
const $ = require("jquery");
const jQuery = require("jquery");
window.jQuery = $;
const fancybox = require("@fancyapps/fancybox");
import Swiper, { Navigation } from 'swiper';
import Inputmask from "inputmask";
let im = new Inputmask("+7-(999)-999-99-99");


$(document).on('submit', '[data-name="callback"]', function (e) {
    e.preventDefault();
    sendForm($(this),'/ajax/callback/');
});

//липкое меню
var stickyHeight = $('.header__sticky').outerHeight();
$(window).scroll(function() {
    if($(this).scrollTop() >= stickyHeight) {
        $('.header__sticky').addClass('sticky');
        $('.header__heading').css('padding-top', stickyHeight*2);

    }
    else{
        $('.header__sticky').removeClass('sticky');
        $('.header__heading').css('padding-top','0');
    }
});

// adv slider
var vw = window.innerWidth;

(function () {
    if (vw < 768) {
        new Swiper(".header-adv__items", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    }
})();
// мобильное меню
$('.mobile-menu-toggle').on('click', function () {
    $('.header__mob-menu').toggleClass('open');
    $('.header__sticky').toggleClass('blue');
});

// скрываем мобильное меню по клику на элемент меню
$('.header__mob-menu .header-menu__link').on('click', function(){
    $('.header__mob-menu').removeClass('open');
});
$('.header__link').on('click', function(){
    $('.header__mob-menu').removeClass('open');
});

// плавный скролл
$('a[href^="#"').on('click', function() {
    var href = $(this).attr('href');
    var headerHeight = $('.header__sticky').outerHeight();
    console.log(headerHeight);
    $('html, body').animate({
            scrollTop: $(href).offset().top - headerHeight
        },
        {
            duration: 370,
            easing: "linear"
        });
    return false;
});

document.querySelectorAll('[data-product-id]').forEach(el => {
    el.addEventListener('click', function (e) {
        const productId = this.dataset.productId;
        axios.get(`/modal-catalog/${productId}`).then(response => {
            $.fancybox.open(response.data, {
                autoFocus: false
            });
            im.mask(document.querySelector('[name="phone"]'));
            $(document).on('submit', '[data-name="product"]', function (e) {
                e.preventDefault();
                sendForm($(this),'/ajax/product/');
            });
        });
    });
});

function sendForm($this, url) {
    $this.find('.error').removeClass('error');
    axios.post(url, new FormData($this[0])).then(response => {
        $.fancybox.close();
        $.fancybox.open(response.data.message);
    }).catch(error => {
        const errors = error.response.data.errors;
        for (const error in errors) {
            $this.find(`[name="${error}"]`).addClass('error');
        }
    });
}
