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
                <p>
                    Sur ce site vous allez pouvoir suivre tous vos artistes préférés.
                </p>
                <p>
                    Dès qu'un artiste que vous suivez sort un projet, vous allez recevoir une e-mail pour vous prévenir.
                </p>
            </div>
            <div>
                <p>L'artiste est dans votre liste</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
