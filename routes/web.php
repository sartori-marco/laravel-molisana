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

Route::get('/', function () {
    return view('home');
});



Route::get('/prodotti', function () {
    // passo l'array pasta
  $pasta = config('pasta');       
  $data = ['tipologie' => $pasta];
    return view('prodotti', $data);
});

// route per i dettagli di ogni singola pasta
Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta'); 
    $prodotto = $pasta[$id];
    $data = [
        'formato' => $prodotto
    ];
    return view('dettagli', $data);
})->name('dettagli-pagina');

Route::get('news', function () {
    return view('news');
    // riga 21 news deve essere uguale al nome del file
});

