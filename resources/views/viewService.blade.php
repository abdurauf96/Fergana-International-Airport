@extends('layouts.index')

@section('css-files')
    <link rel="stylesheet" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/css/owl.theme.default.min.css"/>
@endsection

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
        /images/ser.jpg
        @endslot
        @slot('page')
            {{ $service->getTranslatedAttribute('title', \App::getLocale()) }}
        @endslot
    @endcomponent
    <div class="container-fluid usluga">
        <div class="container">
            {{-- <div class="usluga__head">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div> --}}
        </div>
        <div class="container usluga__wrapper">
            <div class="usluga__left">
                @include('layouts.sidebarService')
            </div>
            <div class="usluga__right">
            <div class="wifi">
                <div class="wifi__head">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div>
     
                <div class="wifi__text"> {!! $service->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                
                @if ($service->images)
                <div class="owl-carousel">
                    @php
                        $images=json_decode($service->images)
                    @endphp
                    @foreach ($images as $image)
                    <div class="img_item">
                        <img src="{{ Voyager::image($image) }}" alt="">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            </div>
        </div>
    </div>
@endsection

@section('js-files')
    <script src="/js/owl.carousel.min.js" ></script>
    <script>
        $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            margin: 30,
            slideSpeed : 1000,
            dots:true,
            autoplay:true,
            autoplayTimeout:3000,
            nav: true,
             navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
        });
      });
    </script>
    
@endsection
