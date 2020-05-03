@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
       {{  Voyager::image($page->image) }}
        @endslot
        @slot('page')
        {{ $page->getTranslatedAttribute('title', \App::getLocale()) }}
        @endslot
    @endcomponent
    <div class="container-fluid usluga"> 
        <div class="container page__wrapper">
            <div class="usluga__left">
                <div class="usluga__left--avtor">@lang('messages.drugie')</div>
                <ul class="usluga__list">
                    @foreach ($pages as $item)
                    <li class="usluga__list--item"><a class="@if('page/'.$item->slug == Request::path() ) sidebar_active @endif usluga__list--link" href="{{ route('page', $item->slug) }}">
                        {{ $item->getTranslatedAttribute('title', \App::getLocale()) }} </a>
                    </li>
                    @endforeach
                    @if ($page->category=='airport')
                    <li class="usluga__list--item"><a class=" usluga__list--link" href="/our-location">
                        @lang('messages.location')</a>
                    </li>
                    @endif
                </ul>
            </div>

            <div class="page__right ">
                
                @if ($page->key=="table")
                    @include('sections.table')
                @elseif ( ($page->key=="howtoget") || ($page->key=="transport")  )
                    @include('sections.howto')
                @elseif ($page->key=="companies")
                    @include('sections.companies')
               @elseif ($page->key=="geokarta")
                  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A63c77055397cb49c250d9f7729efd5cc2f75503f308f4e9ca92f24a3548ad7a6&amp;width=930&amp;height=495&amp;lang=ru_RU&amp;scroll=true"></script>
                @else
                    <div class="wifi">
                        <div class="wifi__head">{{ $page->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                        <div class="wifi__text">{!! $page->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                        @if ($page->images)
                        <hr>
                        <div class="owl-carousel">
                            @php
                                $images=json_decode($page->images)
                            @endphp
                            @foreach ($images as $image)
                            <div class="img_item">
                                <img src="{{ Voyager::image($image) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                @endif
                
            </div>
        </div>
    </div>
    @if (($page->key=="howtoget") || ($page->key=="transport"))
        @include('sections.taxi')
    @endif
    @if ( ($page->category=='airport') || ($page->category=='partners'))
        @include('sections.statistika')
    @endif
    
    @include('sections.partners')
@endsection
@section('script')

@stop