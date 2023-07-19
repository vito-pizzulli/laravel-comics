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
    $comics = config('comics');
    $navbarLinks = config('db.navbarLinks');
    $dcComicsLinks = config('db.dcComicsLinks');
    $shopLinks = config('db.shopLinks');
    $dcLinks = config('db.dcLinks');
    $siteLinks = config('db.siteLinks');
    $socials = config('db.socials');
    return view('home', compact('comics', 'navbarLinks', 'dcComicsLinks', 'shopLinks', 'dcLinks', 'siteLinks', 'socials'));
})->name('homepage');