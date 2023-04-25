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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/bussiness-transformstion-and-consulting', function () {
    return view('services.bussiness');
})->name('bussiness');

Route::get('/platform-and-product-engineering', function () {
    return view('services.platform');
})->name('platform');

Route::get('/digital-infrasttucture', function () {
    return view('services.digital');
})->name('digital');

Route::get('/data-and-analytics', function () {
    return view('services.data');
})->name('data');