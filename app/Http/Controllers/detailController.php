<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class detailController extends Controller
{
    //
    public function index(Request $request){
        $id = $request->id;
        $Movie = Http::get('Https://api.themoviedb.org/3/movie/'.$id.'?api_key='.config('services.tmdb.token'))->json();

        return view('detail', ['Movie' => $Movie]);
    }

    public function show(Request $request){
        $id = $request->id;
        $Movie = Http::get('Https://api.themoviedb.org/3/movie/'.$id.'?api_key='.config('services.tmdb.token'))->json();

        return view('detail', ['Movie' => $Movie]);
    }
}
