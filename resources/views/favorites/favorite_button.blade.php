@if (Auth::user()->is_favorited($micropost->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm btn-block"]) !!}
    {!! Form::close() !!}
        
@else 
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm btn-block"]) !!}
    {!! Form::close() !!}
    
@endif

            