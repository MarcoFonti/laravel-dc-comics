<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /* RECUPERO VALORI DEL FILE COMICS */
       $movies = Movie::all();

       /* RECUPERO VALORI DEL FILE MAIN_MENU */
       $main_menu = config('main_menu');

       return view('movies.index', compact('movies', 'main_menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $movie = new Movie();

        $movie->fill($data);

        $movie->save();

        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        /* RECUPERO VALORI DEL FILE MAIN_MENU */
        $main_menu = config('main_menu');

        return view('movies.show', compact('movie', 'main_menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->all();

        $movie->fill($data);

        $movie->save();

        return redirect()->route('movies.show', $movie->id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}