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

Route::get('/paul', function () {
    $yo = "<h2>paul</h2>";
    return $yo;
});

Route::get('/welcome/{var}', function ($p) {
    return view('welcome',compact('p'));
});

Route::get('/', function () {
    $yo = "<h2>paul</h2>";
    return $yo;
});

Route::get('/couleur', function () {
    $noir = "noir";
    return view('couleur', compact('noir'));
});

Route::get('/new', function () {
    $first = 5;
    $second = 8;
    return view('new' ,compact('first', 'second'));
});