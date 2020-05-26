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
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('susanna');
});

Route::get('/visit', function () {
    return view('visit');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/photos', function () {
    return view('photos');
});

