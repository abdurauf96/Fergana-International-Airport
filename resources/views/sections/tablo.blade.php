<div class="container-fluid tablo">
  <div class="container tablo__wrapper wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" >
    {{-- <h1 class="tablo__head">Онлайн-табло рейсов</h1> --}}
    <div class="tablo__block">
      <button class="tablo__item tablo__active" >@lang('messages.onlayn_tab')</button>
      <a class="tablo__item tablo__active2 getPrilet" data-key="arrival" href="#">
        <img  src="images/arrival.png" alt="samalyot"/><span>@lang('messages.prilet')</span>
      </a>
      <a class="tablo__item getVilet" data-key="departure" href="#">
        <img src="images/samalyot.png" alt="samalyot"/><span>@lang('messages.vilet')</span>
      </a>
    </div>
    <div class="mytable">
      <div class="mytable__head">
        <div class="mytable__head--item">@lang('messages.company') </div>
        <div class="mytable__head--item">@lang('messages.reys')</div>
        <div class="mytable__head--item">@lang('messages.directions')</div>
        <div class="mytable__head--item mytable__mobile--none">@lang('messages.vremya')</div>
        <div class="mytable__head--item mytable__mobile--none">@lang('messages.status')</div>
        <div class="mytable__head--item mytable__mobile--none">@lang('messages.fakt')</div>
      </div>
      <div class="mytable__wrapper">
        <div id="prilet">
          @foreach ($flights as $fly)
          <div class="mytable__item" id="prilet">
              <div class="mytable__block">
                <div class="mytable__block--item">
                  <img src="{{ Voyager::image($fly->logo) }}" alt="table1"/>
                </div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.reys')  </div>
                <div class="mytable__block--item">{{ $fly->number }}       </div>
                <div class="mytable__block--item">{{ $fly->getTranslatedAttribute('direction', \App::getLocale()) }}</div> 
              </div>
              <div class="mytable__block"> 
                <div class="mytable__block--item">{{ $fly->time }}</div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.status')   </div>
                <div class="mytable__block--item">
            @if($fly->status==1)  
                @if ( date('H:i') > $fly->time)
                  @lang('messages.pribil')
                @else
                  @lang('messages.ojidanie') {{ $fly->time }}
                @endif
            @else
                 Рейс отменен
            @endif
                </div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.fakt')</div>
                <div class="mytable__block--item">{{ $fly->time }}</div>
              </div>
          </div>
          @endforeach
        </div>
        <div id="vilet">
          @foreach ($vilets as $vilet)
          <div class="mytable__item" >
              <div class="mytable__block">
                <div class="mytable__block--item">
                  <img src="{{ Voyager::image($vilet->logo) }}" alt="table1"/>
                </div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.reys')  </div>
                <div class="mytable__block--item">{{ $vilet->number }}       </div>
                <div class="mytable__block--item">{{ $vilet->getTranslatedAttribute('direction', \App::getLocale()) }}</div> 
              </div>
              <div class="mytable__block"> 
                <div class="mytable__block--item">{{ $vilet->time }}</div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.status')   </div>
                <div class="mytable__block--item">
            @if($vilet->status==1) 
                @if ( date('H:i') > $vilet->time)
                  @lang('messages.letel')
                @else
                  @lang('messages.ojidanie') {{ $vilet->time }}
                @endif
            @else
                 Рейс отменен
            @endif
                </div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.fakt')</div>
                <div class="mytable__block--item">{{ $vilet->time }}</div>
              </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    {{-- <a class="tablo__podrob" href="#">Подробнее &rarr;</a> --}}
  </div>
</div>