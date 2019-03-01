@if (Auth::id() == $thing->user_id)
    
    {!! Form::open(['route' => ['things.unused', $thing->id]]) !!}
   <span class="form-inline" >
        {{Form::hidden('invisible', 1)}}
        
        {!! Form::submit('Unused', ['class' => 'btn btn-outline-danger btn-sm']) !!}
        </span>
    {!! Form::close() !!}
@endif