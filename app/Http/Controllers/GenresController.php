<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index($genre)
    {
        $moviesWithGenre = Movie::where('genre', $genre)->get();
        return view('movies', ['movies' => $moviesWithGenre]);
    }
}
