
<div class="usluga__left--avtor">@lang('messages.ourservices')</div>
<ul class="usluga__list">
    @foreach ($services as $service)
    <li class="usluga__list--item">
        <a class="usluga__list--link @if('service/'.$service->slug == Request::path() ) sidebar_active @endif " href="{{ route('viewService', $service->slug) }}">
        {{ $service->getTranslatedAttribute('title', \App::getLocale()) }}</a>
    </li>
    @endforeach

</ul>