$(document).ready(function () {
    // ------------------------ mobile-menu starts
    $(".trigger").click(function () {
        $(this).toggleClass("on");
        if ($(".trigger").hasClass("on")) {
            $(".nav-menu").css("left", "0px");
        } else { $(".nav-menu").css("left", "-100%"); }
    });
    // ------------------------ end of mobile-menu

    //------------------ testimonial starts

    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    // $('#customers-testimonials').owlCarousel({
    //     loop: true,
    //     center: true,
    //     items: 4,
    //     margin: 0,
    //     autoplay: false,
    //     dots: true,
    //     autoplayTimeout: 6000,
    //     smartSpeed: 1000,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         768: {
    //             items: 1
    //         },
    //         1170: {
    //             items: 1
    //         }
    //     }
    // });
    //------------------ end of testimonial



});

// ------------------------- end of ready function

//-------------------- Portfolio hover starts
$(function () {
    $(' #grid > li ').each(function () { $(this).hoverdir(); });
});
//-------------------- end of Portfolio hover
