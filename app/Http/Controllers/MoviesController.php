<?php

namespace App\Http\Controllers;

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

    public function show(Movie $movie, Request $request) {
        return view('movie', compact('movie'));
    }
}
