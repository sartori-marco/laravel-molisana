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
  $pasta = config('pasta');       
  
  $data = ['tipologie' => $pasta];
    return view('prodotti', $data);
});

Route::get('/dettaglio/{id}', function ($id) {
    return view('dettagli');
});

Route::get('news', function () {
    return view('news');
    // riga 21 news deve essere uguale al nome del file
});

