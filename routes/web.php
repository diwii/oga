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
    return view('index');
})->name('home');

Route::get('/par-mums', function () {
    return view('about');
})->name('about');

Route::get('/darinajumi', function () {
    return view('products');
})->name('products');

Route::get('/receptes', function () {
    return view('recipes');
})->name('recipes');

Route::get('/kontakti', function () {
    return view('contacts');
})->name('contacts');
