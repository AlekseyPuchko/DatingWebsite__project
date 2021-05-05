//конфигурируем слайдеры
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

//реализуем live search
document.querySelector("#livesearch").oninput = function () {
    let val = this.value.trim();
    let livesearchItems = document.querySelectorAll(".people-info");

    if (val != "") {
        livesearchItems.forEach(function (elem) {
            elem.textContent.toLowerCase().search(val) === -1
                ? (elem.style.display = "none")
                : (elem.style.display = null);
        });
    }
};
