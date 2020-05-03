    fetch('https://api.openweathermap.org/data/2.5/weather?q=Fergana&appid=0e695f70b4fc658773b511d44b35cc79')
    .then(response => response.json())
    .then( function(data){
        $('#temp').html(Math.round(data.main.temp - 273) + '   &degC');
         $('.temp').html(Math.round(data.main.temp - 273) + '   &degC');
        $('#img').html(`<img src="https://openweathermap.org/img/wn/${data.weather[0]['icon']}.png" alt="">`)
        $('.img').html(`<img src="https://openweathermap.org/img/wn/${data.weather[0]['icon']}.png" alt="">`)
         
    });
    
    // let url="https://api.flightstats.com/flex/schedules/rest/v1/json/from/KZN/to/FEG/arriving/2020/01/22?appId=7389766a&appKey=eb01d2bb3b262de7e7a39d709990cd68";
    
    // fetch(url, {
    //     headers: {
    //     'Access-Control-Allow-Origin': 'https://ferganaairport.uz'
    //   }
    // })
    // .then(response => response.json())
    // .then(function(data){
    //     console.log(data);
    // });
    
    
    
    $('.getReys').click(function(e){
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
                $('#resReys').html(data);
            }
        })
    })
    
    

      $('.getTender').click(function(e){
          e.preventDefault()
          $(this).addClass('news__link--active')
          $(this).siblings().removeClass('news__link--active')
          $('#tender').css('display', 'block');
          $('#info').css('display', 'none');
          $('#news').css('display', 'none');
      })

    $('.getNews').click(function(e){
        e.preventDefault()
        $(this).addClass('news__link--active')
        $(this).siblings().removeClass('news__link--active')
        $('#news').css('display', 'block');
        $('#info').css('display', 'none');
        $('#tender').css('display', 'none');
    })

    $('.getInfo').click(function(e){
        e.preventDefault()
        $(this).addClass('news__link--active')
        $(this).siblings().removeClass('news__link--active')
        $('#info').css('display', 'block');
        $('#news').css('display', 'none');
        $('#tender').css('display', 'none');
    })


$('.more').click(function(e){
    e.preventDefault()
    var key=$(this).attr('value');
    if (key=='false') {
        $(this).attr('value', 'true')
        $(this).parent().parent().parent().siblings('.post_body').css('display', 'block');
    }else{
        $(this).attr('value', 'false')
        $(this).parent().parent().parent().siblings('.post_body').css('display', 'none');
    }
})

$('.getVilet').click(function(e){
    e.preventDefault()
    $(this).addClass('tablo__active2')
    $('.getPrilet').removeClass('tablo__active2')

    $('#vilet').css('display', 'block')
    $('#prilet').css('display', 'none')

})

$('.getPrilet').click(function(e){
    e.preventDefault()
    $(this).addClass('tablo__active2')
    $('.getVilet').removeClass('tablo__active2')
    $('#vilet').css('display', 'none')
    $('#prilet').css('display', 'block')
})