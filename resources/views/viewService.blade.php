@extends('layouts.index')

@section('css-files')
   
@endsection

@section('content')
<div class="page-body info-body">

    @include('sections.header')
    
    @component('layouts.bread')
        @slot('page_img')
        /images/ser.jpg
        @endslot
        @slot('page')
            {{ $service->getTranslatedAttribute('title', \App::getLocale()) }}
        @endslot
    @endcomponent

    <div class="usluga">
        
        <div class="container usluga__wrapper">
            <div class="usluga__left">
                @include('layouts.sidebarService')
            </div>
            <div class="usluga__right">
                <div class="wifi">
                    <div class="wifi__head">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div>
        
                    <div class="wifi__text"> {!! $service->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                    
                    @if ($service->images)
                    <div class="owl-carousel" style="float: left">
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
@endsection
