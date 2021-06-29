<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!--Style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil">Spotify Tracker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listArtist">Artistes suivis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apropos">A Propos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('artist') }}">
                    @csrf
                    <div class="form-group">
                        <div class="col">
                            <div class="form-group row">
                                <div class="col">
                                    <input class="form-control pull-left" name="artist_name" type="search" placeholder="Recherche artiste" aria-label="Search">
                                </div>
                                <div class="col">
                                    <button class="btn btn-outline-success float-right" type="submit">Rechercher</button></div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </nav>

    @yield('content')


    <!--JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
