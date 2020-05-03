@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
           /images/news.jpg
        @endslot
        @slot('page')
           
               @lang('messages.news')
           
        @endslot
    @endcomponent

    <div class="container-fluid ">
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
                        <a href="/category/tendery">Тендеры</a>
                        <div class="line"></div>
                    </div>
                    
                    <div class="category_item">
                        <a href="/category/informaciya">Информации</a>
                        <div class="line"></div>
                    </div>
                    <div class="category_item">
                        <a href="/category/novosti">Новости</a>
                        <div class="line"></div>
                    </div>
                    
                </div>
                @foreach ($posts as $post)
                <div class="post_item">
                    <div class="post_content">
                        <div class="post_image">
                            <img src="{{ Voyager::image($post->thumbnail('medium')) }}" alt="">
                        </div>
                        <div class="post_text">
                            <h5>{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}</h5>
                            <p>{{ $post->getTranslatedAttribute('excerpt', \App::getLocale()) }}</p>
                            <div class="post_date">
                                <span>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ $post->created_at->format('M d, Y') }} 
                                </span>
                                <span> <i class="fa fa-eye" aria-hidden="true"></i> {{ $post->view }}</span>
                                <a href="#" value="false" class=" more">@lang('messages.more')</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="post_body">
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
                            
                        </div>
                    </div>       
                </div>
                <hr>
                @endforeach
                {{ $posts->links('layouts.pagination') }}
            </div>
        </div>
    </div>

@endsection