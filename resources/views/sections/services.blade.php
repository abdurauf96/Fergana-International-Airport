<div class="container-fluid service " >
  <div data-aos="fade-up"
  data-aos-anchor-placement="bottom-bottom">
      <div class="container service__left " >
        <div class="service__left--head">@lang('messages.nashi_usl')</div>
      </div>
      <div class="container" >
        <div class="swiper-container"  >
          <div class="service__right swiper-wrapper">
            @foreach ($services as $service)
            <a class="service__item swiper-slide"  href="{{ route('viewService', $service->slug) }}">
            <img class="service__item--img lazy" data-src="{{ Voyager::image($service->image) }}" src="{{ Voyager::image($service->image) }}" alt="alt"/>
                <div class="service__block">
                <div class="service__item--avtor">{{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</div>
                  <div class="service__item--text">{{ Str::limit($service->getTranslatedAttribute('description', \App::getLocale()), 65)   }}</div>
                </div>
            </a>
            @endforeach
            
          </div><!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
  </div>
</div>