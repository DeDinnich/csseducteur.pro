<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\QuizzController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/search', [QuizzController::class, 'index'])->name('search');
Route::get('/results', function () {
    return view('results');
})->name('results');

Route::get('/reset', [QuizzController::class, 'reset'])->name('reset');