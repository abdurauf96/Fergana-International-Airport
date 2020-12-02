@extends('layouts.index')

@section('content')
@include('sections.header')

    @component('layouts.bread')
        @slot('page_img')
            /images/tablo.jpg
        @endslot
        @slot('page')
            @lang('messages.tablo')
        @endslot
    @endcomponent

    @include('sections.tablo')

@endsection