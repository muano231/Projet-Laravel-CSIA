@extends('layouts.app')

@section('title')
    Artist tracker
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Bienvenue sur Artist Tracker</h1>
            </div>
            <div>
                <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('artist') }}">
                    @csrf
                    <div class="form-group">
                        <span class="col-md-2 control-label">Commercer à suivre un artiste</span>
                        <div class="col-md-10">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input class="form-control pull-left" name="artist_name" type="search" placeholder="Rechercher un artiste" aria-label="Search">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-success float-right" type="submit">Rechercher</button>                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <div id="app"></div>

            </div>
        </div>
    </div>
    <script>
        function home(id) {
            fetch("/likeartist", {
                method: "POST",
                body: {'id': id}
            })
        }

        const app = document.getElementById("app")
        let albums = @json($artists);
        let queryArtist = @json($queryArtist);
        if(queryArtist) {
            let res = queryArtist["artists"].items.map(e => Object.assign({"name": e.name, "id": e.id}))
            app.innerHTML = "<ul class=\"list-group\">" + res.map(e => "<li><p> " +"<button class=\"btn btn-sm btn-success\" onclick=\"home('" + e.id + "');\">Suivre</button> "+ e.name + "</p></li>").join("<br>")+ "</ul>"
        }
        if(albums) {
            albums = albums.items
            albums.forEach(item => {
                let elem = document.createElement("p")
                elem.innerHTML = item.name + " - " + item.release_date
                app.appendChild(elem)
            })
        }
    </script>
@endsection
