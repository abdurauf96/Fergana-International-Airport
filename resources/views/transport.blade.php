@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
        arrival-fon.png
        @endslot
        @slot('page')
            Транспорт
        @endslot
    @endcomponent
   
    <div class="container-fluid information transport">
        <div class="container">
          <div class="information__head">Транспорт</div>
        </div>
        <div class="container information__wrapper">
          <div class="information__right transport__right">
            <div class="information__block">
              <div class="information__block--left"><img src="/images/такси2.png" alt="kuting"/></div>
              <div class="information__block--right">
                <div class="information__block--title">Такси</div>
                <div class="information__right--text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.  Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев.</div>
              </div>
            </div>
            <div class="information__block">
              <div class="information__block--left"><img src="/images/такси3.png" alt="kuting"/></div>
              <div class="information__block--right">
                <div class="information__block--title">Автобусы</div>
                <div class="information__right--text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.  Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев.</div>
              </div>
            </div>
            <div class="information__block">
              <div class="information__block--left"><img src="/images/такси1.png" alt="kuting"/></div>
              <div class="information__block--right">
                <div class="information__block--title">Международный Аэеропорт Фергана</div>
                <div class="information__right--text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей.  Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев.</div>
              </div>
            </div>
          </div>
        </div>
    </div>
   
@endsection