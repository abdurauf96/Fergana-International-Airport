<div class="container-fluid avia">
    
   
      <table class="table table-bordered table-hover">
        <thead>
          <tr> 
            <th>@lang('messages.company')               </th>
            <th>@lang('messages.nazvanie')                </th>
            <th>@lang('messages.kod')                </th>
            
            <th>@lang('messages.site')                </th>
            <th>Контакты</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($companies as $com)
          <tr> 
            <td> <img src="{{ Voyager::image($com->logo) }}" alt=""/></td>
            <td>{{ $com->name }} </td>

            <td>{{ $com->kod }}</td>
            
            <td> <a class="avia__link" href="{{ $com->site }}">@lang('messages.pereyti')</a></td>
            <td> <a class="avia__email" href="#">{{ $com->contact }} </a></td>
          </tr>
        @endforeach
        </tbody>
      </table>

</div>