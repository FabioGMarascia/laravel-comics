<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = config("data.store");

    return view('homepage', $data);
})->name("home");

Route::get('/home', function () {

    $data = config("data.store");

    return view('homepage', $data);
})->name("home");

Route::get('/comicsList', function () {

    $data = config("data.store");

    return view('comicsList', $data);
})->name("comicsList");



Route::get('/comicsDescription/{index}', function ($index) {

    $comics = config("data.store.comics");

    $data = [
        "comic" => $comics[$index]
    ];

    return view('comicsDescription', $data);
})->name("comicsDescription");
