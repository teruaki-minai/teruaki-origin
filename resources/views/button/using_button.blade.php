@if (Auth::id() == $thing->user_id)
   
    {!! Form::open(['route' => ['things.using', $thing->id],'method' => 'delete']) !!}
     <span class="form-inline" >
        {{Form::hidden('invisible',2)}}
        {!! Form::submit('Using', ['class' => 'btn btn-outline-info btn-sm']) !!}
       </span> 
    {!! Form::close() !!}
@endif