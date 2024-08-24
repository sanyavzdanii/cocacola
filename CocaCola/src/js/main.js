import $ from 'jquery';
import 'bootstrap';
import '@popperjs/core';
import '../scss/style.scss';

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
