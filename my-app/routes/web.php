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
})->name('homepage');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/dopo-il-corso', function () {
    return view('dopo-il-corso');
})->name('dopo-il-corso');

Route::get('/lezione-gratuita', function () {
    return view('lezione-gratuita');
})->name('lezione-gratuita');

Route::get('/assumi-studenti', function () {
    return view('assumi-studenti');
})->name('assumi-studenti');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
