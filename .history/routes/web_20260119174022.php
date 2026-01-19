<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');
