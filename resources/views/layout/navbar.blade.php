<?php
    use App\Models\Category;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="Bootstrap/js/bootstrap.min.js" defer></script>
    <title>@yield('title')</title>
    @yield('header')
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_short-8e7b30f73a4020692ccca9c88bafe5dcb6f8a62a4c6bc55cd9ba82bb2cd95f6c.svg" width="154" height="20" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon-primary">=</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach(Category::existingCat() as $cat)
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/{{$cat->description}}">{{$cat->name}}</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="/">Popular</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/toprated">Top Rated</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/upcoming">Upcoming</a>
                        </li> -->
                    @endforeach

                    <li class="nav-item">
                    <a class="nav-link" href="/crud">CRUD</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>
</body>
</html>