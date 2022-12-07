@extends('layout/navbar')

@section('title', "themoviedb")

@section('header')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('main')
    <div class="content">
        <div class="container">
            <div class="row">
                @foreach($popularMovies as $movie)
                    <div class="card mt-5" style="width:13rem;margin-right:15px;margin-left:15px;background-color:#F5F5F5">
                    <a href="/detail/{{$movie['id']}}"><img src="https://www.themoviedb.org/t/p/w440_and_h660_face/{{$movie['poster_path']}}" class="card-img-top mt-2"></a>
                    <div class="card-body">
                        <p class="movie_score">{{$movie['vote_average']}}</p>
                        <a href="/detail/{{$movie['id']}}"><h5 class="card-title">{{$movie['title']}}</h5></a>
                        <p class="card-text">{{$movie['release_date']}}</p>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection