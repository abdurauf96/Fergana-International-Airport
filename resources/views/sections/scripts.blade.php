<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script src="/js/jquery-2.1.1.min.js" ></script>
    <script src="/js/popper.js" ></script>
    <script src="/js/bootstrap.min.js"  ></script>
    <script src="/js/slick.min.js" ></script>
    <script src="/js/main.js" ></script>
    <script src="/js/swiper.js" ></script>
    <script src="/js/my.js" ></script>
    <script src="/js/share.js" ></script>
    <script src="/js/wow.min.js" ></script>
    <script src="/js/owl.carousel.min.js" ></script>
    <script src="/versiya/js/responsivevoice.min.js?ver=1.5.0" ></script>
    <script src="/versiya/js/bvi-init-panel.js" ></script>
    <script src="/versiya/js/bvi.min.js" ></script>
    <script src="/versiya/js/js.cookie.js" ></script>
    <script>
          new WOW().init();
    </script>
   
    <script>
      var swiper = new Swiper('.swiper-container', {
          slidesPerView: 4,
          spaceBetween: 30,
          centeredSlides: true,
          observer: true,
          observeParents: true,
          autoplay: {
            delay: 2000,
            waitForTransition:true
          },
          loop: true,
           // Navigation arrows
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },

          // And if we need scrollbar
          scrollbar: {
              el: '.swiper-scrollbar',
          },
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 5,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
          }
        });

    </script>