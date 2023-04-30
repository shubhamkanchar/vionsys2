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


// services route


Route::get('/Web-development', function () {
    return view('services.web');
})->name('web');

Route::get('/digital-marketing', function () {
    return view('services.digital');
})->name('digital');

Route::get('/hadoop', function () {
    return view('services.hadoop');
})->name('hadoop');

Route::get('/soa', function () {
    return view('services.soa');
})->name('soa');

Route::get('/data-warehousing', function () {
    return view('services.data');
})->name('data');