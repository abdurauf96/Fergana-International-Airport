@extends('layouts.index')

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