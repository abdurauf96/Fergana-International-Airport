
<ul class="topmenu">
  <li class="topmenu__item">
    <a class="topmenu__link" href="/">@lang('messages.home')</a>
  </li>
  @foreach ($items as $item)
  <li class="topmenu__item" tab-index="0">
    <a class="topmenu__link" href="#">{{ $item->getTranslatedAttribute('title', \App::getLocale(), 'ru') }} </a>
    <div class="megadrop">
    <ul>
      @foreach ($item->children as $submenu)
      <li><a href="{{ $submenu->url }}">{{ $submenu->getTranslatedAttribute('title', \App::getLocale(), 'ru') }} </a></li>
      @endforeach
    </ul>
    </div>  
  </li>
  @endforeach
</ul>