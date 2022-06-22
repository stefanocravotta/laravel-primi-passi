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

    $user = [
        'name' => 'Ugo',
        'surname' => 'De Ughi'
    ];
    return view('homepage', $user);
})->name('Home Page');

Route::get('/blog', function () {
    return view('blog');
})->name('Blog');

Route::get('/contact', function () {
    return view('contact');
})->name('Contact');

Route::get('/about', function () {
    return view('about');
})->name('About');
