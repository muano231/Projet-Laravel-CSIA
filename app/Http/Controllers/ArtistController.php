<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use Illuminate\Support\Facade\Http;
use App\Models\UserArtist;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class ArtistController extends Controller
{

    public function add(Request $request) {
        $validated = $request->validate([
            'body' => 'required'
        ]);

        $idArtist = $request->id;
        $artistUser = User::create(array('UserArtist' => Auth::user()->email, 'idArtist' => $idArtist));
        $artistUser->save();
        return view('artist', []);
    }

    public function list() {
        $listArtist = UserArtist::where('id', '=', 1);

        foreach ($listArtist as $idArtist) {
            $artistListdisk = Spotify::artistAlbums($idArtist)->country('US')->get();
            // test pour voir si il y a un album à la date du jour
        }
        return view('listArtist', []);
    }

}
