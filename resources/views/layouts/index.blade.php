<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@lang('messages.title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible"  content="ie=edge"/>
    <meta name="title" content="Официальный сайт международного аэропорта Фергана" />
	  <meta name="description" content="Официальный сайт международного аэропорта Фергана">
	  <meta property="og:description" content="Официальный сайт международного аэропорта Фергана" />
	  <meta property="og:title" content="Официальный сайт международного аэропорта Фергана" />
    <meta name="keywords" content="International Airport Fergana, Сайт Ферганского международного аэропорта fargona, aeroport, samalyot, xavo">
    <meta property="og:url"   content="Официальный сайт международного аэропорта Фергана" />
    <meta property="og:image" content="/favicon.ico" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css "/>
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/versiya/css/bvi.min.css" type="text/css">
    @yield('css-files')

    <!-- /Yandex.Metrika counter -->
    <meta name="yandex-verification" content="f763e6c40f67061e" />
    <meta name="google-site-verification" content="ind2WxmdlKIqR03ThBAZgH0g83tViGx_Vll4IZxKF4w" />
    <!-- Yandex.Metrika counter -->
    <script  >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(56139070, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    
  </head>
  <noscript><div><img src="https://mc.yandex.ru/watch/56139070" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <body>


    @yield('content')

    <img onclick="topFunction()" title="Вверх" id="myBtn" src="/images/top.png" alt="">
    <footer class="container-fluid footer">
      <div class="container bottom__wrapper">
        <div class="bottom__head">@lang('messages.title')</div>
      </div>
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__item">
            <div class="footer__head">@lang('messages.pages')</div>
            <a class="footer__link" href="/posts">@lang('messages.news')</a>
            <a class="footer__link" href="/faq">FAQ</a>
            <a class="footer__link" href="/our-location">@lang('messages.location')</a>
          </div>
          <div class="footer__item">
            <div class="footer__head">@lang('messages.spravka')</div>
            <a class="footer__link footer__call" href="tel:+998 73 241-60-04">+998 73 241-60-04</a>
            <a class="footer__link footer__mail" href="mailto">info.feg@uzbairports.uz</a>
            <a class="footer__link dover" href="tel:+998 73 241-60-03"><span style="font-size:11pt">@lang('messages.dover'):</span> +998 73 241-60-03</a>
          </div>

          <div class="footer__item">
            <div class="footer__head">@lang('messages.social')</div>
            <div class="social">
                <div class="social_item"><a href="https://www.youtube.com/channel/UC0GIF_ds7OvjP7-57DPX5yg"><img src="/images/youtube.png" alt=""></a></div>
                <div class="social_item"><a href="https://t.me/fergana_airport"><img src="/images/telegram.png" alt=""></a></div>
                <div class="social_item"><a href="https://www.instagram.com/fergana_airport/"><img src="/images/instagram.png" alt=""></a></div>
                <div class="social_item"><a href="https://www.facebook.com/FerganaAirportPage/"><img src="/images/facebook.png" alt=""></a></div>
            </div>
          </div>
          <div class="footer__item">
            <div class="footer__head">@lang('messages.contact')</div>
            <button class="footer__otziv" type="button" data-toggle="modal" data-target="#modelId">@lang('messages.ostavit')</button>
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <modal-title class="mymodal__head" id="modelTitleId">@lang('messages.ostavit_title')</modal-title>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4></h4>
                  </div>
                  <div class="modal-body">
                    <form class="mymodal__form" action="/message" method="POST">
                      @csrf
                      <input class="form-control" type="text" name="name" placeholder=" @lang('messages.name')"/>

                      <input required class="form-control" type="number" name="phone" placeholder=" @lang('messages.phone')*"/>
                      <textarea required class="form-control" name="body" placeholder="@lang('messages.vashe')*"></textarea>
                      <input class="form-control" type="submit" value="@lang('messages.send')"/>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="container-fluid ost">
      <div class="container">
        <p class="footer__copyright">© 2020 @lang('messages.title')</p>
      </div>
    </div>

    <script>


      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
    <div class="fixed__icon">

        <a href="/page/raspisanie-rejsov"   class="btn" data-toggle="tooltip" data-placement="left" title="@lang('messages.table')"><i class="fa fa-table"></i></a>
        <a href="/page/geografiya-poletov"  class="btn " class="red-tooltip" data-toggle="tooltip" data-placement="left" title="  @lang('messages.geo')"><i class="fas fa-globe-americas"></i></a>
        <a  href="/faq" class="btn" data-toggle="tooltip" data-placement="left" title="FAQ"><i class="fa fa-question"></i></a>
        <a  href="/page/kak-dobrat-sya" class="btn" data-toggle="tooltip" data-placement="left" title="@lang('messages.how')"><i class="fa fa-bus"></i></a>
        <a  href="/our-location" class="btn" data-toggle="tooltip" data-placement="left" title="@lang('messages.location')"><i class="fa fa-map"></i></a>
    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script> --}}
    <script src="/js/jquery-2.1.1.min.js" ></script>
    <script src="/js/popper.js" ></script>
    <script src="/js/bootstrap.min.js"  ></script>
    <script src="/js/slick.min.js" ></script>
    <script src="/js/main.js" ></script>
    <script src="/js/my.js" ></script>
    <script src="/js/wow.min.js" ></script>
    <script src="/versiya/js/bvi-init-panel.js" ></script>
    <script src="/versiya/js/bvi.min.js" ></script>
    <script src="/versiya/js/js.cookie.js" ></script>
    <script>
          new WOW().init();
    </script>
    @yield('js-files')
    
 <!--<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=a698c4afdb5ef4280e3b1ef2af5e3c4b" charset="UTF-8"></script>-->
  </body>
</html>
