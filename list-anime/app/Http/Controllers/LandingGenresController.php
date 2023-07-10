<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingGenresController extends Controller
{
    public function index()
    {
        return redirect('/');
    }
    public function show(string $id)
    {
        $genresall = Genres::all();
        $genre = Genres::find($id);
        return view('genres.index', [
            'genresall' => $genresall,
            'genre' => $genre
        ]);
    }
}
