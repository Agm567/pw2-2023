<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;

class DashboardMoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();
        return view('dashboard.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genres::all();
        $countries = Countries::all();
        return view('dashboard.movies.create', compact('genres', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:movies|max:255',
            'poster' => 'required',
            'genres_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required',
            'rating' => 'required',
        ]);
        Movies::create($validated);
        return redirect('/dashboard/movies')->with('success', 'Movie is successfully saved');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movies = Movies::find($id);
        $genres = Genres::all();
        $countries = Countries::all();
        return view('dashboard.movies.edit', compact('movies', 'genres', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|unique:movies|max:255',
            'poster' => 'required',
            'genres_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required',
            'rating' => 'required',
        ]);
        Movies::whereId($id)->update($validated);
        return redirect('/dashboard/movies')->with('success', 'Movie is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movies::destroy($id);
        return redirect('/dashboard/movies')->with('success', 'Movie is successfully deleted');
    }
}
