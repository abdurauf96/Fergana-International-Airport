@extends('layouts.index')

@section('css-files')
  
@endsection



@section('content')
<div class="header-wrapper">
  @include('sections.header')
  @include('sections.slider')
</div>    
    
  @include('sections.tablo')
  @include('sections.services')
  @include('sections.posts')
  @include('sections.partners')
    
  <div class="modal"><!-- Place at bottom of page --></div>
@endsection

@section('js-files')
  <script>
    $(document).ready(function(){

      $('.getReys').click(function(e){
        $body = $("body");
        $body.addClass("loading"); 
        e.preventDefault();
        $(this).addClass('tablo__active2');
        $(this).siblings().removeClass('tablo__active2');
        var key=$(this).data('key');
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'POST',
          url: '/get-reys',
          data: {key:key},
          success:function(data){
              $('.mytable__wrapper').html(data);
                $body.removeClass("loading");
          }
        })
      })

      $('.getPost').click(function(e){
        e.preventDefault()
          $body = $("body");
          $body.addClass("loading");
          var href=$(this).data('href');
          
          var id=$(this).data('id');
          $(this).addClass('news__link--active')
          $(this).siblings().removeClass('news__link--active')
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/get-post',
            data: {id:id},
            success:function(data){
                $('#posts').html(data);
                $('.all_news').attr('href', href);
                 $body.removeClass("loading");
            }
        })   
      })
      $('.lazy').lazy();
    })
    
  </script>
@endsection