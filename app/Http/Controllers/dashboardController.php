<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class dashboardController extends Controller
{
    //

    public function index(){
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key='.config('services.tmdb.token'))
        ->json()['results'];

        return view('dashboard', ['popularMovies' => $popularMovies]);
    }
}
