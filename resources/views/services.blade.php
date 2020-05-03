@extends('layouts.index')

@section('content')
    
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
            /images/ser.jpg
        @endslot
        @slot('page')
            @isset($cat)
               {{ $cat->getTranslatedAttribute('name', \App::getLocale()) }}
            @else
               @lang('messages.nashi_usl')
            @endif
        @endslot
    @endcomponent

    <div class="container-fluid usluga">
        
        <div class="container usluga__wrapper">
            <div class="usluga__left">
                @include('layouts.sidebarService')
            </div>
            <div class="usluga__right">
                @foreach ($services as $service)
                <div class="usluga__item">
                    <img class="usluga__item--img" src="{{ Voyager::image($service->image) }}" alt="kuting"/>
                    <div class="usluga__block">
                    <div class="usluga__item--avtor">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                    <div class="usluga__item--text">{{ Str::limit($service->getTranslatedAttribute('description', \App::getLocale()), 130) }}</div>
                    <div class="usluga__item--link"><a href="{{ route('viewService', $service->slug) }}"> @lang('messages.more') &rarr;</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection