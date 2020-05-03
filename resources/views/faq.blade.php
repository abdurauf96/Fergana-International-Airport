@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
        /images/faq.jpg
        @endslot
        @slot('page')
            FAQ
        @endslot
    @endcomponent
   
    <div class="container-fluid usluga faq">
        <div class="container">
          <div class="usluga__head">@lang('messages.faq')</div>
        </div>
        <div class="container usluga__wrapper">
          <div class="information__left">
            @include('layouts.sidebarPost')
          </div>
          <div class=" faq__wrapper">
            @foreach ($faqs as $faq)
              <div class="faq__item">
                <div class="faq__head">
                  <i class="fa fa-plus @if($loop->first) i__active @endif"></i><span>{{ $faq->getTranslatedAttribute('title', \App::getLocale()) }}</span></div>
                <div class="faq__main @if($loop->first) faq__main--active @endif">
                  <div class="faq__main--text">{{ $faq->getTranslatedAttribute('body', \App::getLocale()) }}</div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    </div>

    
@endsection