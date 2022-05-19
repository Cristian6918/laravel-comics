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
    $comics = config("comics");
    $menu = config("menuList");
    return view('home', ['comics' => $comics], ['menu' => $menu]);
});

Route::get('/details/{id}', function ($id) {
    $menu = config("menuList");
    $comics = config("comics");
    return view('details', ['comics' => $comics[$id]], ['menu' => $menu]);
});
