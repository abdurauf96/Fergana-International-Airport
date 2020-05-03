@extends('layouts.index')

@section('css-files')
  <link rel="stylesheet" href="/css/swiper.css" />
@endsection



@section('content')
    <div class="head slider collectonme">
        <div class="container-fluid slider_img"  style="background-image: url('/images/covid.jpg');" >
            @include('sections.header')
            @include('sections.top')
            <div class="container slider__wrapper">
              <div class="slider__item" style="">
                <!--<div class="slider__item--head">Фергана - Красноярск </div>-->
                <!--<div class="slider__item--desc">по четвергам </div>-->
              </div>
            </div>
        </div>
        
        <div class="container-fluid slider_img "  style="background-image: url('/images/slider.jpg'); " >
            @include('sections.header')
            @include('sections.top')
            <div class="container slider__wrapper">
              <div class="slider__item">
                {{-- <div class="slider__item--head">Выиграй 2 билета <br>до ДOXИ</div> --}}
                
              </div>
            </div>
        </div>
        
        
        <!--<div class="container-fluid slider_img" style="background-image: url('/images/map3.jpg');" >-->
        <!--  @include('sections.header')-->
        <!--  @include('sections.top')-->
        <!--  <div class="container slider__wrapper">-->
        <!--    <div class="slider__item">-->
              
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
    </div>
   
    @include('sections.tablo')
    @include('sections.services')
    @include('sections.posts')
    @include('sections.partners')
    
@endsection

@section('js-files')
  <script src="/js/swiper.js" ></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        observer: true,
        observeParents: true,
        autoplay: {
          delay: 2000,
          waitForTransition:true
        },
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 5,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        }
      });

  </script>
@endsection