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
    @yield('css-files')
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/mobile.css" />
    <link rel="stylesheet" href="/css/my.css" />
    
    

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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <noscript><div><img src="https://mc.yandex.ru/watch/56139070" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <body>

  {{-- <div class="layer" style="display: block">
  <div class="modal-box basic-flex">
  <button type="button" class="btn hide-modal-btn">x</button>
  <h4>@lang('messages.podpis')</h4>
  <div class="telegram-join basic-flex">
  <a href="https://t.me/fegairport">@lang('messages.podpisatsa')</a>
  </div>
  </div>
  </div> --}}
  
    @yield('content')

    {{-- <img onclick="topFunction()" title="Вверх" id="myBtn" src="/images/icons/top2.png" alt=""> --}}
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
                <div class="social_item"><a href="https://www.youtube.com/channel/UC0GIF_ds7OvjP7-57DPX5yg"><img src="/images/icons/youtube.svg" alt=""></a></div>
                <div class="social_item"><a href="https://t.me/fegairport"><img src="/images/icons/telegram.svg" alt=""></a></div>
                <div class="social_item"><a href="https://www.instagram.com/fergana_airport/"><img src="/images/icons/instagram.svg" alt=""></a></div>
                <div class="social_item"><a href="https://www.facebook.com/FerganaAirportPage/"><img src="/images/icons/facebook.svg" alt=""></a></div>
            </div>
          </div>
          <div class="footer__item">
            <div class="footer__head">@lang('messages.contact')</div>
            <button class="footer__otziv" type="button" data-toggle="modal" data-target="#modelId">@lang('messages.ostavit')</button>
            <div class="form-modal modal-otziv" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="mymodal__head" id="modelTitleId">@lang('messages.ostavit_title')
                    </div>
                    
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
    
    <div class="fluid otprovlen otziv_success" style="display: none;">
      <div class="container otprovlen__wrapper">
        <div class="otprovlen__head">@lang('messages.sps')</div>
        <div class="otprovlen__desc">@lang('messages.sps_desc')</div>
        <a class="btn otprovlen__link " href="#">OK</a>
      </div>
    </div>

    {{-- CIP MODAL --}}
    <div class="form-modal modal-cip" id="CIPmodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="mymodal__head" id="modelTitleId"> <p class="cip_title"> @lang('messages.cip_title')</p> @lang('messages.cip_desc')
            </div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4></h4>
          </div>
          <div class="modal-body">
            <form class="mymodal__form cip_form" method="POST" action="#">
              @csrf
              <input placeholder="@lang('messages.date')" required class="form-control date" type="text" name="date" onfocus="(this.type='date')" />
              <input required class="form-control name" type="text" name="name" placeholder="@lang('messages.fio')"/>
              <input required class="form-control phone" type="text" name="phone" placeholder="@lang('messages.tel')"/>
              <input required class="form-control reys_num" type="text" name="reys_number" placeholder="@lang('messages.reys_num')"/>
              <span>
               @lang('messages.terms') 
                <input required class="form-control privacy" type="checkbox" name="privacy"/> </span>
                <label class="field_req" for="">@lang('messages.req_title')</label>
              <input class="form-control cip_btn cip_order cip_btn_disabled" type="submit" disabled value="@lang('messages.zakazat')"/>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- END CIP MODAL --}}

    {{-- PRIVACY MODAL --}}
    <div class="form-modal modal-privacy" id="" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="mymodal__head" id="modelTitleId"> <p class="cip_title"> @lang('messages.cip_title')</p> @lang('messages.rules')
            </div>
            
            <button class="close-privacy" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4></h4>
          </div>
          <div class="modal-body">
            @lang('messages.cip_rules')
          </div>
        </div>
      </div>
    </div>
    {{-- END PRIVACY MODAL --}}

    {{-- XOLODILNIK MODAL --}}
    <div class="form-modal modal-xolod" id="xolodmodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="mymodal__head" id="modelTitleId"> <p class="cip_title">@lang('messages.xolod_title')</p>
              @lang('messages.xolod_desc')
            </div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4></h4>
          </div>
          <div class="modal-body">
            <form class="mymodal__form cip_form" method="POST" action="/xolod-order">
              @csrf
              <input required class="form-control name" type="text" name="name" placeholder="@lang('messages.fio')"/>
              <input required class="form-control phone" type="text" name="phone" placeholder="@lang('messages.tel')"/>
              <label class="field_req" for="">@lang('messages.req_title')</label>
              <input class="form-control cip_btn xolod_order " type="submit"  value="@lang('messages.otpravit')"/>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- XOLODILNIK MODAL --}}

    <div class="fixed__icon">

        <a href="/page/raspisanie-rejsov" class="btn" data-toggle="tooltip" data-placement="left" data-title="@lang('messages.table')">
          <img src="/images/icons/table.png">
        </a>
        <a href="/page/geografiya-poletov"  class="btn " class="red-tooltip" data-toggle="tooltip" data-placement="left" data-title="@lang('messages.geo')">
          <img src="/images/icons/earth.png">
        </a>
        <a  href="/faq" class="btn" data-toggle="tooltip" data-placement="left" data-title="FAQ">
          <img src="/images/icons/faq.png">
        </a>
        <a  href="/page/kak-dobrat-sya" class="btn" data-toggle="tooltip" data-placement="left" data-title="@lang('messages.how')">
          <img src="/images/icons/bus.png">
        </a>
        <a  href="/our-location" class="btn" data-toggle="tooltip" data-placement="left" data-title="@lang('messages.location')">
          <img src="/images/icons/locat.png">
        </a>

    </div>
    
    <script src="/js/main.js" ></script>
    <script src="/src/aos.js"></script>
    <script src="/js/jquery.lazy.min.js"></script>
    @yield('js-files')
    
    <script>
      $(function() {
           AOS.init();
      });
    </script>

 <script>


  //Get the button
  //var mybutton = document.getElementById("myBtn");
  var myMenu = document.querySelector('.section__wrapper');
  //  var myMenuLink = document.getElementsByClassName("topmenu__link");

  var header = document.get
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.documentElement.scrollTop > 20) {
      //mybutton.style.display = "block";
      myMenu.classList.add("menu_fixed");
      
      
    } else {
      //mybutton.style.display = "none";
      myMenu.classList.remove("menu_fixed");
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
 <!--<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=a698c4afdb5ef4280e3b1ef2af5e3c4b" charset="UTF-8"></script>-->
 <script>
window.replainSettings = { id: '97f6e47d-13fb-45e0-8c90-f3eb295436d2' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
  </body>
</html>
