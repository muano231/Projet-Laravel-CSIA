@extends('layouts.app')

@section('title')
    A propos
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>A quoi sert Artist tracker</h1>
            </div>
            <div>
                <p>
                    Sur ce site vous allez pouvoir suivre tous vos artistes préférés.
                </p>
                <p>
                    Lorsqu'un artiste que vous suivez sort un album ou un projet, vous allez pouvoir le voir sur la page : <a class="link" href="listArtist">Artistes suivis</a>
                </p>
            </div>
        </div>
    </div>
@endsection
