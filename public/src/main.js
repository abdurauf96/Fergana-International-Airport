$(document).ready(function() {
  try {
    $(".swiper-wrapper").slick({
      arrows: true,
      dots: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      infinite: false,
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 850,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 650,
        settings: {
          variableWidth: true,
          slidesToShow: 1,
          centerMode: true,
          centerPadding: 20,
          infinite: true,
          arrows: false,
          autoplay: true
        }
      },
      {
        breakpoint: 500,
        settings: {
          variableWidth: false,
          slidesToShow: 1,
          centerMode: true,
          centerPadding: 20,
          infinite: true,
          arrows: false,
          autoplay: true
        }
      }
      ]
    });
  
    $(".portner__wrapper").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [{
  
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          infinite: true
        }
  
      }, {
  
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          dots: true
        }
  
      }]
    });
  } catch (error) {
    console.log(error);
  }
  ok = true;
  $('.search__img').click(function () {
    if (ok == true) {
      $(".form__none").css("transform", "translateX(-95%) scaleY(1)");
      ok = false;
    } else {
      $(".form__none").css("transform", "translateX(-95%) scaleY(0)");
      ok = true;
    }
  });
  
  $(".topmenu__item").mouseout(function () {
    $(this).children('.absolute__ul').slideToggle();
  });
  
  $('.faq__head').click(function () {
    if ($(this).siblings('.faq__main').is(':visible')) {
      $('.plus-img').removeClass('i__active');
      $(this).siblings('.faq__main').hide('slow');
    } else {
      $('.faq__head').siblings('.faq__main').hide('slow');
      $('.plus-img').removeClass('i__active');
      $(this).siblings('.faq__main').show('slow');
      $(this).children('.plus-img').addClass('i__active');
    }
  
  });
  
  
  $('.lang_btn').click(function () {
    $(this).parent().toggleClass('dropdown--open');
  });
  
  $('.footer__otziv').click(function () {
    $('.form-modal').addClass('form-modal--active');
    $('body').css('overflow-y', 'hidden');
  });
  
  $('.close[data-dismiss="modal"]').click(function () {
    $('.form-modal').removeClass('form-modal--active');
    $('body').css('overflow-y', 'auto');
  });
  
  $('.navbar-btn').click(function () {
    $('.menu-mask').addClass('menu-mask--active');
    $('.topmenu').addClass('topmenu--active');
    $('body').css('overflow-y', 'hidden');
  
  });
  
  $('.menu-mask').click(function () {
    $('.menu-mask').removeClass('menu-mask--active');
    $('.topmenu').removeClass('topmenu--active');
    $('body').css('overflow-y', 'auto');
  });
  
  $('.close-menu-btn').click(function () {
    $('.menu-mask').removeClass('menu-mask--active');
    $('.topmenu').removeClass('topmenu--active');
    $('body').css('overflow-y', 'auto');
  });
  
  $('.topmenu__link').click(function (e) {
    e.preventDefault();
    console.log('ok')
    $(this).next().toggle();
  })
});