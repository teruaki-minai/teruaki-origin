@if (Auth::id() == $thing->user_id)
    {!! Form::open(['route' => ['things.destroy', $thing->id], 'method' => 'delete']) !!}
   <span class="form-inline" >
        {!! Form::submit('Throwaway', ['class' => 'btn btn-outline-secondary btn-sm']) !!}
    </span>
    {!! Form::close() !!}
@endif