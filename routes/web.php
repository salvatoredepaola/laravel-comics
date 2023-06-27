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
    $social = config('social');
    $misc = config('misc.someLinks');
    $comics = config('comics');
    $links = config('store.someLinks');
    return view('welcome', compact('links', 'comics', 'misc', 'social'));
});

Route::get('/ActionComics', function () {
    $social = config('social');
    $misc = config('misc.someLinks');
    $links = config('store.someLinks');
    return view('other', compact('links', 'misc', 'social'));
});
