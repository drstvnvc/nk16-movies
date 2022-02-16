<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('title')->get();
        return view('movies', compact('movies'));
    }

    public function show(Movie $movie, Request $request)
    {
        return view('movie', compact('movie'));
    }

    public function create()
    {
        return view('create-movie');
    }

    public function store(StoreMovieRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::create($data);

        return redirect("/movies/$movie->id");
    }
}
