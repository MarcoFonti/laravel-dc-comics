<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class HomeController extends Controller
{
    public function __invoke()
    {
        /* RECUPERO VALORI DEL FILE COMICS */
        $movies = Movie::all();

        /* RECUPERO VALORI DEL FILE MAIN_MENU */
        $main_menu = config('main_menu');

        return view('home', compact('movies', 'main_menu'));
    }
}