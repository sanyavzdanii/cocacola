import $ from 'jquery';
import 'bootstrap';
import '@popperjs/core';
import '../scss/style.scss';

window.addEventListener('load', function() {
    // Вызов вашей функции
    windowOnloadAdd();
});

function windowOnloadAdd() {
    setTimeout(() => document.querySelector('.mySwiper-cloud').classList.add('show'), 3000);
}

$(document).ready(function() {
    // Меню шариком
    $('#menu-button').on('click', function(e) {
        $('#menu-button').toggleClass("touch");
        $('.second-menu').toggleClass("show");
        $('html').toggleClass("hidden-scroll");
    });

    // Обработчик формы обратной связи
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    $('#form-messages').html('<div class="alert alert-success">' + response.data + '</div>');
                    $('#contact-form')[0].reset();
                } else {
                    $('#form-messages').html('<div class="alert alert-danger">' + response.data + '</div>');
                }
            }
        });
    });
    document.querySelectorAll('.header__menu .nav-item').forEach(item => {
        item.setAttribute('data-text', item.textContent);
    });


});

document.addEventListener('DOMContentLoaded', function() {
    const swiperElement = document.querySelector('swiper-container');

    if (window.innerWidth < 768) {
        if (swiperElement && swiperElement.swiper) {
            swiperElement.swiper.destroy(true, true); // Уничтожаем Swiper
            swiperElement.querySelector('.swiper-wrapper').style.transform = 'none';
            swiperElement.style.height = 'auto'; // Сбрасываем высоту контейнера
        }
    }

    window.addEventListener('resize', function() {
        if (window.innerWidth < 768) {
            if (swiperElement && swiperElement.swiper) {
                swiperElement.swiper.destroy(true, true);
                swiperElement.querySelector('.swiper-wrapper').style.transform = 'none';
                swiperElement.style.height = 'auto';
            }
        }
    });
});
