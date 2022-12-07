<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class nowPlayingController extends Controller
{
    //
    public function index(){
        $nowPlayingMovies = Http::get('https://api.themoviedb.org/3/movie//now_playing?api_key='.config('services.tmdb.token'))
        ->json()['results'];

        return view('nowPlaying', ['nowPlayingMovies' => $nowPlayingMovies]);
    }
}
