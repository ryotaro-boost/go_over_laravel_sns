<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ArticleController@index')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
