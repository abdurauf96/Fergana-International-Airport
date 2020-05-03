$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
 

$(".slider").slick({
    draggable: true,
    arrows: false,
    dots: true,
    fade: true,
    speed: 1000,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    touchThreshold: 100,
    autoplay:true,
    autoplaySpeed:3000
});

$(".portner__wrapper").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed:1500,
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
  
      }, {
  
        breakpoint: 300,
        settings: "unslick" // destroys slick
  
      }]   
});
ok = true;
$('.search__img').click(function(){
    if(ok == true){
        $(".form__none").css("transform","translateX(-95%) scaleY(1)");
        ok = false;
    }else{
        $(".form__none").css("transform","translateX(-95%) scaleY(0)");
        ok =true;
    }
});

$(".topmenu__item").mouseout(function(){
    $(this).children('.absolute__ul').slideToggle();
});

$('.faq__head').click(function(){
    if($(this).siblings('.faq__main').is(':visible')){
        $('.fa-plus').removeClass('i__active');
        $(this).siblings('.faq__main').hide('slow');
    }else{
        $('.faq__head').siblings('.faq__main').hide('slow');
        $('.fa-plus').removeClass('i__active');
        $(this).siblings('.faq__main').show('slow');
        $(this).children('.fa-plus').addClass('i__active');
    }

});