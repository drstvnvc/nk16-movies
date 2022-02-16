@extends('layouts.app')
@section('title', 'Create a movie')


@section('content')
<form method="POST" action="/create">
    @csrf

    <input name="title" required placeholder="Title" value="{{ old('title') }}" class="@error('title') alert-danger @enderror" /><br />
    @error('title')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror

    <input name="director" placeholder="Director" value="{{ old('director') }}" class="@error('director') alert-danger @enderror" /><br />
    @error('director')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror

    <input name="genre" required placeholder="Genre" value="{{ old('genre') }}" class="@error('genre') alert-danger @enderror" /><br />
    @error('genre')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror

    <input name="release_year" type="number" min="1900" max="{{now()->year}}" placeholder="Release year" value="{{ old('release_year') }}" class="@error('release_year') alert-danger @enderror" /><br />
    @error('release_year')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror

    <textarea name="storyline" required placeholder="Storyline" class="@error('storyline') alert-danger @enderror">{{ old('storyline') }}</textarea><br />
    @error('storyline')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <button type="submit">Submit</button>

</form>
@endsection