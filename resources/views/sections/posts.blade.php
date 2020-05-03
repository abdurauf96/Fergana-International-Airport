<div class="container-fluid news">
  <div class="container news__wrapper">
    <div class="news__top wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
      <a class="news__link getInfo " data-id="3" href="#">@lang('messages.infor')</a>
      <a class="news__link getNews  news__link--active" data-id="1" href="#">@lang('messages.news')</a>
      <a class="news__link getTender " data-id="2" href="#">@lang('messages.tenders')</a>
    </div>
    <div id="news" >
      {{-- news --}}
      <div class="news__main  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
        @foreach ($news as $post)
        <div class="news__item">
          <img class="news__item--img" src="{{ Voyager::image($post->thumbnail('medium')) }}" alt="alt"/>
          <div class="news__item--date"> {{ $post->created_at->format('M d, Y') }}</div>
          <div class="news__item--block">
            <a href="{{ route('viewPost', $post->slug) }}"><div class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</div></a>
            
            <div class="news__item--text">{{ Str::limit( $post->getTranslatedAttribute('excerpt', \App::getLocale()), 120 ) }}</div>
            <a class="news__item--link" href="{{ route('viewPost', $post->slug) }}">@lang('messages.more')</a>
          </div>
        </div>
        @endforeach
      </div>
      <a class="all_news" href="/category/novosti">@lang('messages.all_news')</a>
    </div>
      {{-- tenders --}}
    <div id="tender">  
      <div class="news__main">
        @foreach ($tenders as $tender)
        <div class="news__item">
          <img class="news__item--img" src="{{ Voyager::image($tender->thumbnail('medium')) }}" alt="alt"/>
          <div class="news__item--date"> {{ $tender->created_at->format('M d, Y') }}</div>
          <div class="news__item--block">
            <a href="{{ route('viewPost', $tender->slug) }}"><div class="news__item--avtor">{{ $tender->getTranslatedAttribute('title', \App::getLocale()) }}</div></a>
            
            <div class="news__item--text">{{ Str::limit( $tender->getTranslatedAttribute('excerpt', \App::getLocale()), 120 ) }}</div>
            <a class="news__item--link" href="{{ route('viewPost', $tender->slug) }}">@lang('messages.more')</a>
          </div>
        </div>
        @endforeach
      </div>
      <a class="all_news" href="/category/tendery">@lang('messages.all_tenders')</a>
    </div>
    <div id="info">
      {{-- informations --}}
      <div class="news__main">
        @foreach ($infos as $info)
        <div class="news__item">
          <img class="news__item--img" src="{{ Voyager::image($info->thumbnail('medium')) }}" alt="alt"/>
          <div class="news__item--date"> {{ $info->created_at->format('M d, Y') }}</div>
          <div class="news__item--block">
            <a href="{{ route('viewPost', $info->slug) }}"><div class="news__item--avtor">{{ $info->getTranslatedAttribute('title', \App::getLocale()) }}</div></a>
            
            <div class="news__item--text">{{ Str::limit( $info->getTranslatedAttribute('excerpt', \App::getLocale()), 120 ) }}</div>
            <a class="news__item--link" href="{{ route('viewPost', $info->slug) }}">@lang('messages.more')</a>
          </div>
        </div>
        @endforeach
      </div>
      <a class="all_news" href="/category/informaciya">@lang('messages.all_infos')</a>
    </div>
    
  </div>
</div>
