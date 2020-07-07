@extends('layouts.index')

@section('content')
<div class="page-body">

    @include('sections.header')
    
    @component('layouts.bread')
        @slot('page_img')
           /images/news.jpg
        @endslot
        @slot('page')
           
               @lang('messages.news')
           
        @endslot
    @endcomponent

    <div class="main-content">
        <div class="container usluga__wrapper">
            <div class="usluga__left">
                <div class="usluga__left--avtor">@lang('messages.othernews')</div>
                <ul class="usluga__list sidebar_post">
                    @foreach ($top_posts as $top)
                    <li class="usluga__list--item">
                        <img src="{{ Voyager::image($top->thumbnail('medium')) }}" alt="">
                        <div class="news__item--date"> {{ $top->created_at->format('M d, Y') }}</div>
                        <a class="usluga__list--link title" href="{{ route('viewPost', $top->slug) }}">{{ $top->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                    </li>
                    <br>
                    @endforeach
                </ul>
            </div>
            <div class="post__right">
                <div class="category_blok">
                     <div class="category_item">
                        <a href="/category/novosti">@lang('messages.news')</a>
                        <div class="line"></div>
                    </div>
                    <div class="category_item">
                        <a href="/category/tendery">@lang('messages.tenders')</a>
                        <div class="line"></div>
                    </div>
                    
                    <div class="category_item">
                        <a href="/category/uzbekistan-airports">АО «Uzbekistan Airports»</a>
                        <div class="line"></div>
                    </div>
                   <div class="category_item">
                        <a href="/category/mintrans">@lang('messages.mintrans')</a>
                        <div class="line"></div>
                    </div>
                    
                </div>
                @foreach ($posts as $post)
                <div class="post_item">
                    <div class="post_content">
                        <div class="post_image">
                            <img width="200" height="150" src="{{ Voyager::image($post->thumbnail('medium')) }}" alt="">
                        </div>
                        <div class="post_text">
                            <a href="{{ route('viewPost', $post->slug) }}">{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</a>
                            <p>{{ $post->getTranslatedAttribute('excerpt', \App::getLocale()) }}</p>
                            <div class="post_date">
                                <span>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ $post->created_at->format('M d, Y') }} 
                                </span>
                                
                                <a href="{{ route('viewPost', $post->slug) }}" value="false" class=" more">@lang('messages.more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                {{ $posts->links('layouts.pagination') }}
            </div>
        </div>
    </div>
</div>
@endsection