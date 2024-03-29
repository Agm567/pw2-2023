<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class DashboardCountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::all();
        return view('dashboard.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:countries|max:255',
        ]);
        Countries::create($validated);
        return redirect('/dashboard/countries')->with('success', 'Country is successfully saved');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $countries = Countries::find($id);
        return view('dashboard.countries.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        Countries::whereId($id)->update($validated);
        return redirect('/dashboard/countries')->with('success', 'Country is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Countries::destroy($id);
        return redirect('/dashboard/countries')->with('success', 'Country is successfully deleted');
    }
}
