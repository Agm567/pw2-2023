<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalmovies = Movies::count();
        $totalreviews = Reviews::count();
        $totalgenres = Genres::count();
        $totalusers = User::count();

        $movies = Movies::orderBy('id', 'desc')->take(5)->get();
        $reviews = Reviews::orderBy('id', 'desc')->take(5)->get();
        return view('dashboard.dashboard', compact('totalmovies', 'totalreviews', 'totalgenres', 'totalusers', 'movies', 'reviews'));
    }
}
