<div class="news__main">
  @foreach ($posts as $post)
  <div class="news__item">
      <img class="news__item--img" src="{{ Voyager::image($post->image) }}" alt="alt"/>
      <div class="news__item--date"> {{ $post->created_at->format('M d, Y') }}</div>
      <div class="news__item--block">
        <a href="{{ route('viewPost', $post->slug) }}"><div class="news__item--avtor">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</div></a>
        
        <div class="news__item--text">{{ Str::limit( $post->getTranslatedAttribute('excerpt', \App::getLocale()), 120 ) }}</div>
        <a class="news__item--link" href="{{ route('viewPost', $post->slug) }}">@lang('messages.more')</a>
      </div>
  </div>
  @endforeach
</div>
<a class="all_news" href="/posts">@lang('messages.all_news')</a>