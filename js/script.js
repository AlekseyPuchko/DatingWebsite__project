$(document).ready(function () {
    $(".slider").slick();
});

$(document).ready(function () {
    $(".cards").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        swipe: true,
        dots: true,
    });
});
