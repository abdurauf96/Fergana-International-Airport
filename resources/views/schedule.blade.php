@extends('layouts.index')

@section('content')
    @include('sections.header')
    @include('sections.top')
    @component('layouts.bread')
        @slot('page_img')
            /images/tablo.jpg
        @endslot
        @slot('page')
            @lang('messages.table')
        @endslot
    @endcomponent
    <div class="container-fluid usluga"> 
           
        <div class="container-fluid timetable">
            <div class="container">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>@lang('messages.reys')</th>
                    <th>@lang('messages.dni')</th>
                    <th>@lang('messages.pribit')</th>
                    <th>@lang('messages.otprav')</th>
                    <th>@lang('messages.period')</th>
                    <th>@lang('messages.companiya')</th>
                    <th>№ @lang('messages.reys')</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="rowspan" rowspan="5">@lang('messages.domo')</td>
                        <td>@lang('messages.monday')</td>
                        <td>07:40</td>
                        <td>09:10</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://flyredwings.com/"><img src="/images/wz.png" alt=""/></a></td>
                        <td>WZ-408 / WZ-407 </td>  
                    </tr>         
                    <tr>
                        <td>@lang('messages.sesh')</td>
                        <td>08:10</td>
                        <td>09:40</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uralairlines.ru/"><img src="/images/ural.png" alt=""/></a></td>
                        <td>U6-2141 / U6-2142 </td>  
                    </tr>
                    <tr>
                        <td>@lang('messages.chor')</td>
                        <td>06:30</td>
                        <td>08:00</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uralairlines.ru/"><img src="/images/ural.png" alt=""/></a></td>
                        <td>U6-2141 / U6-2142 </td>  
                    </tr>
                    <tr>
                        <td>@lang('messages.pay')</td>
                        <td>08:50</td>
                        <td>10:20</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uralairlines.ru/"><img src="/images/ural.png" alt=""/></a></td>
                        <td>U6-2141 / U6-2142 </td>  
                    </tr>
                    <tr>
                        <td>@lang('messages.juma')</td>
                        <td>18:55</td>
                        <td>20:25</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uralairlines.ru/"><img src="/images/ural.png" alt=""/></a></td>
                        <td>U6-2419 / U6-2420</td>  
                    </tr>
                    
                    <tr>
                        <td class="rowspan" rowspan="2">@lang('messages.novo')</td>
                        <td>@lang('messages.monday')</td>
                        <td>14:55</td>
                        <td>16:25</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.s7.ru/"> <img src="/images/s7.png" alt=""/></a></td>
                        <td>S7-3284 / S7-3283 </td>  
                    </tr>         
                    <tr>
                        <td>@lang('messages.juma')</td>
                        <td>14:55</td>
                        <td>16:25</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td>
                            <a href="https://www.s7.ru/">
                            <img src="/images/s7.png" alt=""/></a>
                        </td>
                        <td>S7-3284 / S7-3283 </td> 
                    </tr>  
        
        
                    <tr>
                        <td class="rowspan" rowspan="4">@lang('messages.vnu')</td>
                        <td>@lang('messages.monday')</td>
                        <td>17:55</td>
                        <td>19:25</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-627 / HY-628 </td>  
                    </tr>         
                    <tr>
                        <td>@lang('messages.sesh')</td>
                        <td>16:10</td>
                        <td>17:40</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-627 / HY-628 </td> 
                    </tr> 
                    <tr>
                        <td>@lang('messages.pay')</td>
                        <td>16:10</td>
                        <td>17:40</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-627 / HY-628 </td> 
                    </tr>
                    <tr>
                        <td>@lang('messages.pay')</td>
                        <td>18:00</td>
                        <td>19:30</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.utair.ru/"><img src="/images/utair.png" alt=""/></a></td>
                        <td>UT-790 / UT-789 </td> 
                    </tr>
        
                    <tr>
                        <td class="rowspan" >@lang('messages.kaz')</td>
                        <td>@lang('messages.chor')</td>
                        <td>20:20</td>
                        <td>11:25</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-651 / HY-652</td>  
                    </tr>       
                    
                    <tr>
                        <td class="rowspan" >@lang('messages.sher')</td>
                        <td>@lang('messages.chor')</td>
                        <td>16:55</td>
                        <td>18:25</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://nordwindairlines.ru/ru"><img src="/images/nord2.png" alt=""/></a></td>
                        <td>N4-204 / N4-203 </td>  
                    </tr>
                    <!--<tr>-->
                    <!--    <td class="rowspan" >@lang('messages.kros')</td>-->
                    <!--    <td>@lang('messages.pay')</td>-->
                    <!--    <td>10:40</td>-->
                    <!--    <td>11:40</td>-->
                    <!--    <td>04.11.19 / 29.03.20</td>-->
                    <!--    <td><a href="https://iraero.ru/"> <img src="/images/ir.png" alt=""/> </a></td>-->
                    <!--    <td>KJA-259 / KJA-258 </td>  -->
                    <!--</tr>-->
        
                    <tr>
                        <td class="rowspan" rowspan="5">@lang('messages.tash')</td>
                        <td>@lang('messages.sesh')</td>
                        <td>14:50</td>
                        <td>15:30</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-084 / HY-083 </td>  
                    </tr>
                    <tr>
                        <td>@lang('messages.chor')</td>
                        <td>10:25</td>
                        <td>21:20</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-085 / HY-086</td>  
                    </tr>
                    
                    <tr>
                        <td>@lang('messages.juma')</td>
                        <td>16:50</td>
                        <td>17:30</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-083 / HY-084</td>  
                    </tr>
                    <tr>
                        <td>@lang('messages.shan')</td>
                        <td>09:40</td>
                        <td>10:20</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-083 / HY-084</td>  
                    </tr>
                    <tr>
                        <td>@lang('messages.yak')</td>
                        <td>15:15</td>
                        <td>08:40</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-084 / HY-083</td>  
                    </tr>
                    <tr>
                        <td class="rowspan" >@lang('messages.peter')</td>
                        <td>@lang('messages.yak')</td>
                        <td>07:40</td>
                        <td>16:15</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td><a href="https://www.uzairways.com/"><img src="/images/HY.png" alt=""/></a></td>
                        <td>HY-636 / HY-635 </td>  
                    </tr>
                    
        
                    <tr>
                        <td class="rowspan" >@lang('messages.irk')</td>
                        <td>@lang('messages.yak')</td>
                        <td>18:10</td>
                        <td>19:10</td>
                        <td>04.11.19 / 29.03.20</td>
                        <td> <a href="https://iraero.ru/"><img src="/images/ir.png" alt=""/> </a></td>
                        <td>IO-251 / IO-252 </td>  
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
       
    </div>
        
    @include('sections.partners')
@endsection
@section('script')

@stop