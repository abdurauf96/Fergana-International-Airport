<header class="header">
  <div class="container basic-flex header__wrapper">
    <div class="header__left">
      <div class="header__item ">
        <div class="header__date">
          @php
            echo date('M d, H:i ')
          @endphp </div>
      </div>
      <div class="header__item">
        <div class="weather">
          <span id="temp" class="temp"> </span>
          <span id="img" class="img"> </span>
        </div>
      </div>
    </div>
    <div class="header__right">
      {{-- <a class="header__versiya bvi-panel-open" id="specialButton" href="#">@lang('messages.versiya')</a> --}}
      <div class="header__item phone-wrapper">
        <img src="/images/call.png" alt="call__img" /><a style="font-size:16px" href="tel:+998732416004">+998 73 241-60-04</a>
      </div>

      <div class="dropdown">
        @if(App::getLocale()=='ru')
        <button class="btn lang_btn" id="triggerId" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="/images/rus__flag.png" alt="" />
          <span>
            Русский
          </span>
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
          <a class="dropdown-item" href="/lang/uz"> <img src="/images/uzb__flag.png"
              alt="" /><span>O‘zbekcha</span></a>
          <a class="dropdown-item" href="/lang/en"> <img src="/images/en.png" alt="" /><span>English</span></a>
        </div>
        @elseif(App::getLocale()=='en')
        <button class="btn lang_btn" id="triggerId" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="/images/en.png" alt="" />
          <span>
            English
          </span>
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
          <a class="dropdown-item" href="/lang/uz"> <img src="/images/uzb__flag.png"
              alt="" /><span>O‘zbekcha</span></a>
          <a class="dropdown-item" href="/lang/ru"> <img src="/images/rus__flag.png" alt="" /><span>Русский</span></a>
        </div>
        @else
        <button class="btn lang_btn" id="triggerId" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="/images/uzb__flag.png" alt="" />
          <span>
            O‘zbekcha
          </span>
        </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
          <a class="dropdown-item" href="/lang/en"> <img src="/images/en.png"
              alt="" /><span>English</span></a>
          <a class="dropdown-item" href="/lang/ru"> <img src="/images/rus__flag.png" alt="" /><span>Русский</span></a>
        </div>
        @endif
      </div>
    </div>
  </div>
  
  <div class="@if(\Request::route()->getName()=='home') container @endif  section__wrapper">
    @if(\Request::route()->getName()!='home') <div class="container basic-flex"> @endif
      <a class="section__logo" href="/" >
        <span>Фергана</span>
        <span>Международный Аэропорт</span>
      </a>
      <div class="section__menu basic-flex" >
        <button class="btn navbar-btn" type="button"><img src="/images/icons/bars-solid.svg" alt="bars" width="30" height="30"></button>
        <div class="menu-mask"></div>
        <!-- top menu -->
        <ul class="topmenu basic-flex" >
          <li class="close-menu-btn"></li>
          <li class="topmenu__item @if(\Request::route()->getName()=='home') top__menu--active @endif ">
            <a class="topmenu__link" href="/">@lang('messages.home')</a>
          </li>
          @foreach ($menus as $item)
          <li class="topmenu__item" tab-index="0">
            <a class="topmenu__link" href="#">{{ $item->translate(\App::getLocale())->name }} </a>
            <div class="megadrop">
              <ul>
                @foreach ($item->children($item->id) as $submenu)
                <li><a href="{{ $submenu->url }}">{{ $submenu->getTranslatedAttribute('name', \App::getLocale()) }} </a></li>
                @endforeach
              </ul>
            </div>
          </li>
          @endforeach
        </ul>
        <!-- search -->
        <div class="section__search">
          <img class="search__img" src="/images/serach.png" alt="search__png" />
          <form class="form__none" action="/search">
            @csrf 
            <input type="text" name="q" placeholder="@lang('messages.key')..." />
            <input type="submit" value="@lang('messages.nayti')" />
          </form>
        </div>
      </div>
    @if(\Request::route()->getName()!='home') </div> @endif
   
    

  </div>
</header>
