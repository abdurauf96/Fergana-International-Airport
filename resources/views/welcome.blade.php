@extends('layouts.index')

@section('css-files')

@endsection


@section('content')
<div class="header-wrapper">
  @include('sections.header')
  @include('sections.slider')
</div>    
    <div style="background: url(../images/bg4.jpg) no-repeat right center;
    background-size: cover;">
      @include('sections.tablo')
      @include('sections.services')
      
      @include('sections.posts')
      @include('sections.partners')
    </div>
  
  
    
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
    
      $(".cip_btn").click(function(){
          $(".modal-cip").addClass("form-modal--active");
          $("body").css("overflow-y","hidden");
      })

      $(".xolod_btn").click(function(){
          $(".modal-xolod").addClass("form-modal--active");
          $("body").css("overflow-y","hidden");
      })

      $(".privacy_btn").click(function(){
        $(".modal-privacy").addClass("form-modal--active");
        $("body").css("overflow-y","hidden");
      })

      $('.cip_order').prop("disabled", "true");
      $('.privacy').click(function() {
        if ($(this).is(':checked')) {
          $('.cip_order').prop("disabled", false);
          $('.cip_order').removeClass('cip_btn_disabled');
        } else {
          $('.cip_order').attr('disabled',true);
          $('.cip_order').addClass('cip_btn_disabled');

        }
      });

      $('.close-privacy[data-dismiss="modal"]').click(function(){$(".modal-privacy").removeClass("form-modal--active"),$("body").css("overflow-y","auto")});
      
      $('.cip_order').on('click', function (e) {
        e.preventDefault();
        var date=$(this).siblings('.date').val();
        var name=$(this).siblings('.name').val();
        var phone=$(this).siblings('.phone').val();
        var reys_num=$(this).siblings('.reys_num').val();
        if((date!='') && (name!='') && (phone!='') && (reys_num!='')){
          $('.otprovlen').css('display', 'flex');
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'POST',
              url: '/cip-order',
              data: {date:date, name:name, phone:phone,reys_num:reys_num},
              success: function (data) {
        
              },
              error:function(err){
                console.log(err);
              }
          });
        }else{
          $('.field_req').css('display', 'block');
        }
        
      });

      $('.xolod_order').on('click', function (e) {
        e.preventDefault();
        var name=$(this).siblings('.name').val();
        var phone=$(this).siblings('.phone').val();
        if((name!='') && (phone!='')){ 
          $('.otprovlen').css('display', 'flex');
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'POST',
              url: '/xolod-order',
              data: {name:name, phone:phone},
              success: function (data) {
        
              },
              error:function(err){
                console.log(err);
              }
          });
        }else{
          $('.field_req').css('display', 'block');
        }
        
      });

      $('.otprovlen__link').click(function(e){
        $('.otprovlen').css('display', 'none');
        $('.form-modal').removeClass("form-modal--active");
        $("body").css("overflow-y","auto");
      })

  </script>
@endsection