@foreach ($flights as $fly)
<div class="mytable__item">
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
        <div class="mytable__block--item mytable__glav--none"> 
        @lang('messages.status')
        </div>
        <div class="mytable__block--item">
        @if($fly->status==1)
            @if ( date('H:i') > $fly->time)
                @if ($fly->type=='arrival')
                    @lang('messages.pribil')
                @else
                   @lang('messages.letel') 
                @endif
            @else
            @lang('messages.ojidanie') {{ $fly->time }}
            @endif
        @else
            Рейс отменен
        @endif
        </div>
        <div class="mytable__block--item mytable__glav--none"> @lang('messages.fakt')</div>
        <div class="mytable__block--item">{{ $fly->time }}        </div>
    </div>
</div>
@endforeach   