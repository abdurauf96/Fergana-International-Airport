<div class="container-fluid news" >
  
    <div class="container news__wrapper" data-aos="fade-up"
    data-aos-anchor-placement="top-bottom">
    
      <div class="news__top " >
        <a class="news__link getPost " data-href="/category/informaciya" data-id="3" href="#">@lang('messages.infor')</a>
        <a class="news__link getPost news__link--active" data-href="/category/novosti" data-id="1" href="#">@lang('messages.news')</a>
        <a class="news__link getPost " data-href="/category/tendery" data-id="2" href="#">@lang('messages.tenders')</a>
      </div>
      <div id="posts"  >
        <div class="news__main" >
          @foreach ($news as $post)
          <div class="news__item">
            <img class="news__item--img" src="{{ Voyager::image($post->image) }}" alt="alt"/>
            <div class="news__item--date"> {{ $post->created_at->format('M d, Y') }}</div>
            <div class="news__item--block">
              <a href="{{ route('viewPost', $post->slug) }}">
                <div class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</div>
              </a>
              <div class="news__item--text">{{ Str::limit( $post->getTranslatedAttribute('excerpt', \App::getLocale()), 120 ) }}</div>
              <a class="news__item--link" href="{{ route('viewPost', $post->slug) }}">@lang('messages.more')</a>
            </div>
          </div>
          @endforeach
        </div>
        <a class="all_news" href="/category/novosti">@lang('messages.all_news')</a>
      </div>
    </div>
  
</div>
