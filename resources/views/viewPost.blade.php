@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
        /images/news.jpg
        @endslot
        @slot('page')
        {{ $post->category->getTranslatedAttribute('name', \App::getLocale()) }}
        @endslot
    @endcomponent
    <div class="container-fluid usluga"> 
        <div class="container usluga__wrapper">
            <div class="usluga__left">
                <div class="usluga__left--avtor">@lang('messages.othernews')</div>
                <ul class="usluga__list sidebar_post">
                    @foreach ($top_posts as $top)
                    <li class="usluga__list--item">
                        <img src="{{ Voyager::image($top->thumbnail('medium')) }}" alt="post">
                        <div class="news__item--date"> {{ $top->created_at->format('M d, Y') }}</div>
                        <a class="usluga__list--link title" href="{{ route('viewPost', $top->slug) }}">{{ $top->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                    </li>
                    <br>
                    @endforeach
                </ul>
            </div>
            <div class="usluga__right">
                <div class="wifi">
                    <div class="wifi__head">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                    <div class="wifi__text">{!! $post->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                
                    <div class="date_social">
                        <div class="post_date">
                            <span>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $post->created_at->format('M d, Y') }}
                            </span>
                            <span> <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->view }} </span>
                        </div>
                        <div class="social_icons">
                            <span> @lang('messages.share') :
                                <a href="https://www.facebook.com/sharer/sharer.php?u=http://ferganaairport.uz/post/{{ $post->slug  }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://wa.me/?text=http://ferganaairport.uz/post/{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}" class="social-button " id=""><i class="fab fa-whatsapp"></i></a>
                                <a href="https://telegram.me/share/url?url=http://ferganaairport.uz/post/{{ $post->slug  }}"><i class="fab fa-telegram-plane"></i></a>
                                <a href="https://twitter.com/intent/tweet?text={{ $post->getTranslatedAttribute('title', \App::getLocale()) }}&amp;url=http://ferganaairport.uz/post/"><i class="fab fa-twitter"></i></a>
                               
                            </span>
                        </div>
                    </div>
                <a class="all_news" href="/category/{{ $post->category->slug }}">@lang('messages.all')</a>
                </div>
            </div>
            
        </div>
    </div>
@endsection

@section('js-files')
    <script src="/js/share.js" ></script>
@endsection