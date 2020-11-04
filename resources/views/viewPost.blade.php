@extends('layouts.index')

@section('content')
<div class="page-body info-body">
    @include('sections.header')
   
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
                    @if ($post->video)
                    <div class="about-block__item">
                        <div class="item-video">
                            <iframe  
                            src="{{ $post->video }}" height="500" allowfullscreen>
                            </iframe>
                        </div>
                       
                    </div>
                    @endif
                    @if ($post->slider_images)
                    <div class="owl-carousel" style="float: left">
                        @php
                            $images=json_decode($post->slider_images)
                        @endphp
                        @foreach ($images as $image)
                        <div class="img_item">
                            <img src="{{ Voyager::image($image) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <div class="wifi__text">{!! $post->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                    

                    <div class="date_social">
                        <div class="post_date">
                            <img src="/images/icons/calendar.svg" alt="">
                            <span>
                                 {{ $post->created_at->format('M d, Y') }}
                            </span>
                            <img src="/images/icons/eye.svg" alt="">
                            <span> {{ $post->view }} </span>
                        </div>
                        <div class="social_icons">
                            <a>@lang('messages.share') : &nbsp</a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://ferganaairport.uz/post/{{ $post->slug  }}">
                                <img width="20px" height="20px" src="/images/icons/facebook.svg" alt="">
                            </a>
                            <a href="https://wa.me/?text=http://ferganaairport.uz/post/{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}" class="social-button " id="">
                                <img width="20px" height="20px" src="/images/icons/whatsapp.svg" alt="">
                            </a>
                            <a href="https://telegram.me/share/url?url=http://ferganaairport.uz/post/{{ $post->slug  }}">
                                <img width="20px" height="20px" src="/images/icons/telegram.svg" alt="">
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ $post->getTranslatedAttribute('title', \App::getLocale()) }}&amp;url=http://ferganaairport.uz/post/"><img width="20px" height="20px" src="/images/icons/twitter.svg" alt=""></a>
                        </div>
                    </div>
                    
                    <a class="all_news" href="/category/{{ $post->category->slug }}">@lang('messages.all')</a>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('js-files')
<script>
    $(document).ready(function(){
        $('.owl-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinity: false,
        arrows: true,

        responsive: [{
            breakpoint: 850,
            settings: "unslick"
        }]
        })
    });
</script>
<script src="/js/share.js" ></script>
@endsection