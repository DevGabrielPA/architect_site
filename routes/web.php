<?php

use Illuminate\Support\Facades\Route;

// Quando o usuário acessar o link principal (/), o Laravel vai carregar a home
Route::get('/', function () {
    return view('home');
});

Route::get('/who-we-are', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});