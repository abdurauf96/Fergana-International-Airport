<div class="container-fluid service " >

  <div class="container service__left wow slideInRight" data-wow-duration="1s"  data-wow-delay="0.5s">
    <div class="service__left--head">@lang('messages.nashi_usl')</div>
  </div>
  <div class="container wow slideInLeft" data-wow-duration="1s"  data-wow-delay="0.5s">
    <div class="swiper-container " >
      <div class="service__right swiper-wrapper">
        @foreach ($services as $service)
        <a class="service__item swiper-slide"  href="{{ route('viewService', $service->slug) }}">
        <img class="service__item--img" src="{{ Voyager::image($service->image) }}" alt="alt"/>
            <div class="service__block">
            <div class="service__item--avtor">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div>
              <div class="service__item--text">{{ Str::limit($service->getTranslatedAttribute('description', \App::getLocale()), 65)   }}</div>
            </div>
        </a>
        @endforeach
        <a class="service__item swiper-slide">    
        </a>
      </div><!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </div>

</div>