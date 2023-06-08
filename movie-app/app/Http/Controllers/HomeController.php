<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $genres = Genre::all();
        $reviews = Review::all();
        return view('welcome', compact('movies', 'genres', 'reviews'));
    }
}