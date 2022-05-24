<?php

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

// NOTE Rotta per HOME
Route::get('/', function () {
    return view('home');
});

// NOTE Rotta per COMICS
Route::get('/comics', function () {

    $comicsList = config('comics');

    return view('comics', [ 'products' => $comicsList ]);
}) ->name('comics');

// NOTE Rotta show per SINGLE COMIC
Route::get('/comics/{id}', function ( $id ) {

    $comicsList = config('comics');

        // validazione parametro
        if ( is_numeric($id)  && $id < count($comicsList) && $id >= 0 ) {
            // dump( $comicsList[$id] );
    
            $prodotto = $comicsList[$id];
    
            return view('singleComic', [ 'singoloProdotto' => $prodotto ]);
        } else {
            // se non è un numero restituisce una pagina con errore 404
            abort(404);
        }

    return view('comics', [ 'products' => $comicsList ]);
}) ->name('singleComic');