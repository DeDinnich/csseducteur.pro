<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/whoiam', function () {
    return view('whoiam');
})->name('whoiam');

Route::get('/results', function () {
    return view('results');
})->name('results');