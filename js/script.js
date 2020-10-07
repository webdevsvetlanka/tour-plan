$(document).ready(function () {
  //  Вызов функции для IE
  objectFitImages(".js-fit-img");


  var mapFrame = document.querySelector(".map__frame");
  mapFrame.addEventListener("mouseover", initMap);

  function initMap() {
    if (mapFrame.getAttribute("data-src")) {
      mapFrame.setAttribute("src", mapFrame.getAttribute("data-src"));
    }
    mapFrame.removeEventListener("mouseover", initMap);
  };
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
      $bgobj.css({
        backgroundPosition: coords
      });
    });
  });

  // Мобильное меню
  var menuButton = $(".header-top__mb");

  menuButton.on("click", function () {
    $(".header-top__mb-line").toggleClass("active");
    $(".navbar").toggleClass("active");
  });

  // MODAL OPEN
  var modalButton = $('[data-toggle="modal"]');

  modalButton.on("click", function () {
    //$("body").addClass("modal-open");

    $(".modal__overlay").addClass("active");
    $(".modal__dialog").addClass("active");
    $('body').addClass('open');
  });

  // MODAL CLOSE
  var modalButtonClose = $('[data-toggle="modalClose"]');

  modalButtonClose.on("click", function (e) {
    e.preventDefault();

    //$("body").removeClass("modal-open");
    $(".modal__overlay").removeClass("active");
    $(".modal__dialog").removeClass("active");
    $("input").val("");
    $('body').removeClass('open');
  });

  $(document).keyup(function (e) {
    if (e.which == 27) {
      //$("body").removeClass("modal-open");
      $(".modal__overlay").removeClass("active");
      $(".modal__dialog").removeClass("active");
      $("input").val("");
      $('body').removeClass('open');
    }
  });

  // ОБРАБОТКА ФОРМ
  $(".form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      errorElement: "em",
      messages: {
        name: {
          minlength: "The name must be at least 2 letters",
          required: "Please specify your name",
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com",
        },
        phone: {
          required: "Please specify your phone",
        },
      },
    });
  });

  // МАСКА НА ТЕЛЕФОНЫ
  $("[type='tel']").mask("+7 (999) 999-99-99");
  $.fn.setCursorPosition = function (pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd("character", pos);
      range.moveStart("character", pos);
      range.select();
    }
  };
  $("input[type='tel']").click(function () {
    $(this).setCursorPosition(4); // set position number
  });
  AOS.init();
});