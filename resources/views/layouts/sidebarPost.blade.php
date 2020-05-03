<div class="usluga__left--avtor">@lang('messages.othernews')</div>
<ul class="usluga__list sidebar_post">
    @foreach ($posts as $post)
    <li class="usluga__list--item">
        <img src="{{ Voyager::image($post->image) }}" alt="">
        <div class="news__item--date"> {{ $post->created_at->format('M d, Y') }}</div>
        <a class="usluga__list--link title" href="{{ route('viewPost', $post->slug) }}">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</a>
    </li>
    <br>
    @endforeach
</ul>