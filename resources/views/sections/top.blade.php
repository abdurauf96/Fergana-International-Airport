<div class="container-fluid banner @if(\Request::route()->getName()!='home') white__menu @endif ">
    <div class="container-fluid section">
      <div class="container section__wrapper"><a class="section__logo" href="/">
            
          <div class="section__logo--text"><span>@lang('messages.fer')</span>@lang('messages.mejd')</div></a>
        <div class="section__menu">
         @include('layouts.menu')
          <div class="section__search">
            @if(\Request::route()->getName()!='home')
            <img class="search__img" src="/images/search.png" alt="search__png"/>
            @endif
            <img class="search__img" src="/images/serach.png" alt="search__png"/>
            <form class="form__none" action="/search">
              @csrf
              <input type="text" name="q" placeholder="@lang('messages.key')..."/>
              <input type="submit" value="@lang('messages.nayti')"/>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>