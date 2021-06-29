<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Support\Facade\Http;
use Spotify;

class SpotifyController extends Controller
{
    public function home()
    {
        //$artist = Spotify::artistAlbums('0Y5tJX1MQlPlqiwlOH1tJY')->country('US')->get();
        return view('index', [
            'artists' => [],
            'queryArtist' => ""
        ]);
    }

    public function find(Request $request) {
        $artistName = $request->artist_name;
        $artist = Spotify::searchArtists($artistName)->get();
        return view('index', [
            'artists' => [],
            'queryArtist' => $artist
        ]);
    }
}
