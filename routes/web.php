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