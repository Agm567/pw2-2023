<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingMoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();
        $genresall = Genres::all();
        return view('movies.index', [
            'movies' => $movies,
            'genresall' => $genresall
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movies_id' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'users_id' => 'required',
            'rating' => 'required|numeric|min:1|max:10',
            'description' => 'required',
        ]);

        Reviews::create($validatedData);

        $movie = Movies::find($validatedData['movies_id']);

        $reviews = $movie->reviews;
        $total_rating = 0;
        if ($reviews !== null && (is_array($reviews) || is_object($reviews))) {
            foreach ($reviews as $review) {
                $total_rating += $review->rating;
            }
        }

        $review_count = is_countable($reviews) ? count($reviews) : 0;
        $average_rating = ($total_rating + $validatedData['rating']) / ($review_count + 1);
        $movie->rating = $average_rating;
        $movie->save();


        return redirect()->back()->with('success', 'Review submitted successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genresall = Genres::all();
        $movie = Movies::find($id);
        if ($movie->reviews) {
            $totalreview = $movie->reviews->count();
        } else {
            $totalreview = 0;
        }
        $randommovies = Movies::inRandomOrder()->take(3)->get();
        return view('movies.show', [
            'movie' => $movie,
            'totalreview' => $totalreview,
            'randommovies' => $randommovies,
            'genresall' => $genresall
        ]);
    }
}
