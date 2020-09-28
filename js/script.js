$(document).ready(function () {
  objectFitImages(".js-fit-img");

  var hotelSwiper = new Swiper(".hotel__slider-container", {
    // Optional parameters
    loop: true,
    autoplay: {
      delay: 3000,
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    effect: "fade",
    // Navigation arrows
    navigation: {
      nextEl: ".slider-btn_next",
      prevEl: ".slider-btn_prev",
    },
  });

  ymaps.ready(init);
  function init() {
    // Создание карты.
    var myMap = new ymaps.Map("map", {
      center: [43.07879784, 5.8914852],
      zoom: 18,

      // myGeoObject = new ymaps.GeoObject({
      //       // Описание геометрии.
      //       geometry: {
      //           type: "Point",
      //           coordinates: [43.07879784, 5.8914852]
      //       },
      //   }, ),
    });
  }

  var reviewsSwiper = new Swiper(".reviews__slider-container", {
    // Optional parameters
    loop: true,
    autoplay: {
      delay: 9000,
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    effect: "fade",
    // Navigation arrows
    navigation: {
      nextEl: ".reviews-btn_next",
      prevEl: ".reviews-btn_prev",
    },
  });

  $window = $(window);
  $('section[data-type="background"]').each(function () {
    var $bgobj = $(this);
    $(window).scroll(function () {
      var yPos = -($window.scrollTop() / $bgobj.data("speed"));
      var coords = "50% " + yPos + "px";
      $bgobj.css({ backgroundPosition: coords });
    });
  });

  // $(window).scroll(function () {
  //   var st = $(this).scrollTop();

  //   $(".newsletter img").css({
  //     transform: "translate(0%, " + st / 20 + "%",
  //   });
  // });
});
