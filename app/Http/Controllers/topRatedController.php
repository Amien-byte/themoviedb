<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class topRatedController extends Controller
{
    //
    public function index(){
        $topRatedMovies = Http::get('https://api.themoviedb.org/3/movie//top_rated?api_key='.config('services.tmdb.token'))
        ->json()['results'];

        return view('topRated', ['topRatedMovies' => $topRatedMovies]);
    }
}
