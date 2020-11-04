@extends('layouts.index')

@section('content')
<div class="page-body ">
    
    @include('sections.header')
    @component('layouts.bread')
        @slot('page_img')
       /images/4.jpg
        @endslot
        @slot('page')
       О нас
        @endslot
    @endcomponent
    
    <div class="usluga"> 
        <div class="container page__wrapper about-page">
            <div class="usluga__left">
                <div class="usluga__left--avtor">@lang('messages.drugie')</div>
                <ul class="usluga__list">
                    @foreach ($pages as $item)
                    <li class="usluga__list--item">
                        <a class="@if('page/'.$item->slug == Request::path() ) sidebar_active @endif usluga__list--link" href="{{ route('page', $item->slug) }}">
                        {{ $item->getTranslatedAttribute('title', \App::getLocale()) }} </a>
                    </li>
                    @endforeach
                    
                </ul>
            </div>

            <div class="page__right ">
                <div class="about-block">
                    @foreach ($videos as $video)
                    <div class="about-block__item">
                        <div class="item-video">
                            <iframe  
                            src="{{ $video->link }}" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="item-title"><p> {{ $video->getTranslatedAttribute('title', \App::getLocale()) }} </p></div>
                    </div>
                    @endforeach       
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    @include('sections.partners')
@endsection

@section('js-files')
    <!--yandex karta-->
    <link  href="https://api-maps.yandex.ru/2.1?apikey=e0635f6b-47e8-4e2f-8248-c3f242e8ab27&lang=<идентификатор языка>&<дополнительные параметры>
    ">
@endsection