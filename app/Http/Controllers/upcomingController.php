<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class upcomingController extends Controller
{
    //
    public function index(){
        $upcomingMovies = Http::get('https://api.themoviedb.org/3/movie//upcoming?api_key='.config('services.tmdb.token'))
        ->json()['results'];

        return view('upcoming', ['upcomingMovies' => $upcomingMovies]);
    }
}
