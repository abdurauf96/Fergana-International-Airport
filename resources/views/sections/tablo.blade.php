

<div class="container-fluid tablo" >
  <div class="container">
    <div class="tablo__wrapper" data-aos="fade-up"
    data-aos-anchor-placement="bottom-bottom">

      <div class="tablo__block">
        <button class="tablo__item tablo__active">@lang('messages.onlayn_tab')</button>
        <a class="tablo__item tablo__active2 getReys" data-key="arrival" href="#">
          <img src="images/arrival.png" alt="samalyot" /><span>@lang('messages.prilet')</span>
        </a>
        <a class="tablo__item getReys" data-key="departure" href="#">
          <img src="images/samalyot.png" alt="samalyot" /><span>@lang('messages.vilet')</span>
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
         
            @foreach ($flights as $fly)
            <div class="mytable__item" id="prilet">
              <div class="mytable__block">
                <div class="mytable__block--item">
                  <img src="{{ Voyager::image($fly->logo) }}"
                    alt="table1" />
                </div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.reys')  </div>
                <div class="mytable__block--item">{{ $fly->number }}  </div>
                <div class="mytable__block--item">{{ $fly->getTranslatedAttribute('direction', \App::getLocale()) }}</div>
              </div>
              <div class="mytable__block">
                <div class="mytable__block--item">{{ $fly->time }}</div>
                <div class="mytable__block--item mytable__glav--none"> @lang('messages.status') </div>
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
      </div>

    </div>
  </div>
</div>