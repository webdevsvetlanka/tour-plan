$(document).ready(function () {
  //  Вызыв функции для IE
  objectFitImages(".js-fit-img");

  // Слайдер в секции HOTEL
  var hotelSwiper = new Swiper(".hotel__slider-container", {
    loop: true,
    autoplay: {
      delay: 3000,
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    effect: "fade",

    navigation: {
      nextEl: ".slider-btn_next",
      prevEl: ".slider-btn_prev",
    },
  });

  // Карта
  ymaps.ready(init);
  function init() {
    // Создание карты.
    var myMap = new ymaps.Map("map", {
      center: [43.07879784, 5.8914852],
      zoom: 18,
    });
  }

  // Слайдер в блоке REVIEWS
  var reviewsSwiper = new Swiper(".reviews__slider-container", {
    loop: true,
    autoplay: {
      delay: 9000,
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    effect: "fade",

    navigation: {
      nextEl: ".reviews-btn_next",
      prevEl: ".reviews-btn_prev",
    },
  });

  // Прокрутка на фоновом изображении
  $window = $(window);
  $('section[data-type="background"]').each(function () {
    var $bgobj = $(this);
    $(window).scroll(function () {
      var yPos = -($window.scrollTop() / $bgobj.data("speed"));
      var coords = "50% " + yPos + "px";
      $bgobj.css({ backgroundPosition: coords });
    });
  });

  // Мобильное меню
  var menuButton = $(".header-top__mb");

  menuButton.on("click", function () {
    $(".header-top__mb-line").toggleClass("active");
    $(".navbar").toggleClass("active");
  });
});
