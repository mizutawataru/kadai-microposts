@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorited($micropost->id))
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
        
    @else 
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Follow', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    
    @endif
@endif
            