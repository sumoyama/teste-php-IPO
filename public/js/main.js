(function ($) {
    "use strict";
    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });

})(jQuery);

// reserva
$(document).ready(function () {
    $(".btn-reserve").click(function () {
        var roomId = $(this).data("id"); // Extrair o ID do quarto do botão clicado
        var reservationRoute = "/room/" + roomId; // Gerar a URL da rota

        // Redirecione o usuário para a rota de reserva
        window.location.href = reservationRoute;
    });
});
// Date picker
$(document).ready(function () {

    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy'  // Defina o formato desejado aqui
    });
});