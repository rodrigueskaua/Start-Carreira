<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('landing.welcome');
});

Route::get('/home', function () {
  return view('home');
})->name('home');

Route::get('/login', function () {
  return view('auth.login');
});

Route::get('/register', function () {
  return view('auth.register');
});

Route::get('/curriculo', function () {
  return view('curriculo');
})->name('curriculo');

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');

Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');