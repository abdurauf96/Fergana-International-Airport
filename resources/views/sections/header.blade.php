<header class="container-fluid header @if(\Request::route()->getName()!='home') header_bg @endif ">
    <div class="container header__wrapper">
      <div class="header__left">
        <div class="header__item ">
          <div class="header__date">
            @php
            echo date('M d, H:i ')
            @endphp
          </div>  
        </div>
        <div class="header__item">
          <div class="weather">
            <span id="temp" class="temp"> </span>
            <span id="img" class="img"> </span>
          </div>
        </div>
      </div>
      <div class="header__right">
        <a class="header__versiya bvi-panel-open" id="specialButton" href="#">@lang('messages.versiya')</a>
        <div class="header__item">
          <img src="/images/call.png" alt="call__img"/><a style="font-size:16px" href="tel: ">+998 73 241-60-04</a>
        </div>
        <div class="dropdown">
          
          <button class="btn lang_btn" id="triggerId" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (App::getLocale()=='ru')
              <img src="/images/rus__flag.png" alt=""/>
             
            @else
              <img src="/images/uzb__flag.png" alt=""/>
             
            @endif
            <span> @if (\App::getLocale()=='ru')
                Русский   
               
                @else
                O'zbekcha
            @endif </span>
           </button>
          <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="/lang/uz"> <img src="/images/uzb__flag.png" alt=""/><span>O‘zbek</span></a>
            <a class="dropdown-item" href="/lang/ru"> <img src="/images/rus__flag.png" alt=""/><span>Русский</span></a>
          </div>
        </div>
      </div>
    </div>
  </header>