<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class DashboardReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::all();
        return view('dashboard.reviews.index', compact('reviews'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reviews::destroy($id);
        return redirect('/dashboard/reviews')->with('success', 'Review is successfully deleted');
    }
}
