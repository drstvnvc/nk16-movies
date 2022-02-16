@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title}} ({{$movie->release_year}})</h1>
<h3>{{$movie->director}}</h3>
<p>{{$movie->genre}}</p>
<p>{{$movie->storyline}}</p>
@endsection