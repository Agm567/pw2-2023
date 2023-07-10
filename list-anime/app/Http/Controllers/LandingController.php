<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $moviestranding = Movies::orderBy('rating', 'desc')->take(6)->get();
        $moviespopuler = Movies::inRandomOrder()->take(6)->get();
        $moviesrecent = Movies::orderBy('created_at', 'desc')->take(6)->get();
        $topview = Movies::inRandomOrder()->take(5)->get();
        $newreviews = Reviews::orderBy('created_at', 'desc')->take(3)->get();
        $genres = Genres::take(3)->get();
        $randommovies = Movies::inRandomOrder()->take(3)->get();
        $genresall = Genres::all();
        return view('welcome', [
            'moviestranding' => $moviestranding,
            'moviespopuler' => $moviespopuler,
            'moviesrecent' => $moviesrecent,
            'topview' => $topview,
            'newreviews' => $newreviews,
            'genres' => $genres,
            'randommovies' => $randommovies,
            'genresall' => $genresall
        ]);
    }
}
