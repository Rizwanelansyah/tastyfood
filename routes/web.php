<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/news', fn () => view('news'));
Route::get('/gallery', fn () => view('gallery'));
