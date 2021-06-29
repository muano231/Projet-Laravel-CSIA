<?php

use App\Http\Controllers\SpotifyController;
use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [SpotifyController::class, 'home'])->name('accueil');

    Route::get('/accueil', [SpotifyController::class, 'home'])->name('accueil');

    Route::post('/artist', [SpotifyController::class, 'find'])->name('artist');

    Route::post('/likeartist', [ArtistController::class, 'add'])->name('likeartist');

    Route::get('/listArtist', [ArtistController::class, 'list'])->name('listArtist');

    Route::get('/apropos',function (){ return view('about'); });


});


require __DIR__.'/auth.php';
