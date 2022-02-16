@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<h1>Movies</h1>

@foreach($movies as $movie)
<div>
    <div>
        <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
    </div>
    <p>{{$movie->storyline}}</p>
</div>
@endforeach
@endsection