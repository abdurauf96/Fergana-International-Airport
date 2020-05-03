@extends('layouts.index')

@section('content')
  @include('sections.header')
  @include('sections.top')
  @component('layouts.bread')
        @slot('page_img')
            /images/about.jpg
        @endslot
        @slot('page')
           
               @lang('messages.poisk')
           
        @endslot
  @endcomponent

<div class="container-fluid ">
    <div class="container">
        {{-- <div class="usluga__head">Услуги общего пользования</div> --}}
    </div>
    <div class="container usluga__wrapper">
        <div class="usluga__left">
            @include('layouts.sidebarPost')
        </div>
        @if ( (count($posts)<=0) && (count($services)<=0) )
        <div class="post__right">
            @lang('messages.pozaprosu') <span class="q"> "{{ $q }}" </span> @lang('messages.notf')
        </div>
        @else
        
            
            <div class="post__right">
                <p>@lang('messages.results') : @php
                    echo count($posts) + count($services)
                @endphp   </p>
                @if(count($posts)>0)
                    <p class="q">@lang('messages.news')</p>
                    @foreach ($posts as $post)
                    {{-- <a href="{{ route('viewPost', $post->slug) }}"> --}}
                    <div class="post_item">
                        <div class="post_content">
                            <div class="post_image">
                                <img src="{{ Voyager::image($post->image) }}" alt="">
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
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://ferganaairport.uz/post/{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://wa.me/?text=http://ferganaairport.uz/post/{{ $post->getTranslatedAttribute('title', \App::getLocale()) }}" class="social-button " id=""><i class="fab fa-whatsapp"></i></a>
                                            <a href=""><i class="fab fa-telegram-plane"></i></a>
                                            <a href="https://twitter.com/intent/tweet?text={{ $post->getTranslatedAttribute('title', \App::getLocale()) }}&amp;url=http://ferganaairport.uz/post/"><i class="fab fa-twitter"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
                    <hr>
                    @endforeach
                @endif
                @if(count($services)>0 )
                    <p class="q">@lang('messages.nashi_usl')</p>
                    @foreach ($services as $service)
                    <div class="post_item">
                        <div class="post_content">
                            <div class="post_image">
                                <img src="{{ Voyager::image($service->image) }}" alt="">
                            </div>
                            <div class="post_text">
                                <h5>{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</h5>
                                <p>{{ $service->getTranslatedAttribute('description', \App::getLocale()) }}</p>
                                <div class="post_date">
                                
                                    
                                    <a href="#" value="false" class=" more">@lang('messages.more')</a>
                                </div>
                            </div>
                        </div>  
                        <div class="post_body">
                            <div class="wifi">
                                <div class="wifi__head">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                                <div class="wifi__text">{!! $service->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                                
                            </div>
                        </div>       
                    </div>
                    <hr>
                    @endforeach
                @endif

            </div>
            
                
            
        @endif
    </div>
</div>
  
@endsection