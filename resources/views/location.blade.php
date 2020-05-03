@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
        /images/loc2.png
        @endslot
        @slot('page')
            @lang('messages.location')
        @endslot
    @endcomponent
   
    <div class="container-fluid contact">
        <div class="container">
          <div class="contact__head">@lang('messages.location')</div>
        </div>
        <div class="container contact__wrapper">
          <div class="contact__left">
            <div class="card">
              <div class="card__head">
                <div class="card__head--left">@lang('messages.bus')<span class="card__head--description">№ 6Б & 6А</span></div>
                <div class="card__head--right">1000 @lang('messages.sum')</div>
              </div>
              <div class="card__main">
                <div class="card__main--item">
                  <div class="card__main--block"><img src="/images/bus2.png" alt="bus"/><span>@lang('messages.sentr')</span></div>
                  <div class="card__main--block">
                     <i class="fa fa-tachometer"></i><span>20 @lang('messages.min')</span></div>
                  <div class="card__main--block"> <img src="/images/airport.png" alt="plane"/></i><span>@lang('messages.airport')</span></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card__head">
                <div class="card__head--left">@lang('messages.marsh')<span class="card__head--description">№ 6Б</span></div>
                <div class="card__head--right">1000 @lang('messages.sum')</div>
              </div>
              <div class="card__main">
                <div class="card__main--item">
                  <div class="card__main--block"><img src="images/car.png" alt="bus"/>  <span>@lang('messages.sentr')</span></div>
                  <div class="card__main--block">
                     <i class="fa fa-tachometer"></i><span>12 @lang('messages.min')</span></div>
                  <div class="card__main--block"> <img src="images/airport.png" alt="plane"/></i><span>@lang('messages.airport')</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="contact__right"><iframe class="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.4965430032116!2d71.75120675008918!3d40.37568637870839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb9b465410e38b%3A0x9c5b3c4e6c3624b!2zRmFyZydvbmEgeGFscWFybyBhZXJvcG9ydGkuINC80LXQttC00YPQvdCw0YDQvtC00L3Ri9C5INCw0Y3RgNC-0L_QvtGA0YIg0KTQtdGA0LPQsNC90LA!5e0!3m2!1sru!2s!4v1576148638852!5m2!1sru!2s" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
        </div>
    </div>

    
@endsection