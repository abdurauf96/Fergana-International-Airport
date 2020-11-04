@extends('layouts.index')

@section('content')
<div class="page-body">
  
    @include('sections.header')
  
    
    @component('layouts.bread')
        @slot('page_img')
        /images/fon2.jpg
        @endslot
        @slot('page')
            @lang('messages.travel')
        @endslot
    @endcomponent
   
    <div class="usluga faq">
        <div class="container">
          <div class="usluga__head">Sayohat qilishni rejalashtirgan yo'lovchilar uchun muhim ma'lumot.</div>
        </div>
        <div class="container usluga__wrapper">
          <div class="information__left">
            @include('layouts.sidebarPost')
          </div>
          <div class=" faq__wrapper">
            @foreach ($rules as $rul)
              <div class="faq__item">
                <div class="faq__head">
                  <img class="plus-img" src="/images/icons/plus-solid.svg" alt="plus" width="16" height="16">
                  <span>{{ $rul->getTranslatedAttribute('title', \App::getLocale()) }}</span></div>
                    <div class="faq__main @if($loop->first) faq__main--active @endif">
                  <div class="faq__main--text">{!! $rul->getTranslatedAttribute('body', \App::getLocale()) !!}</div>
                </div>
              </div>
            @endforeach
            @lang('messages.manba') 
          <a href="https://www.uzairways.com/uz"> www.uzairways.com</a>
          </div>
          
        </div>
    </div>

  </div>  
@endsection