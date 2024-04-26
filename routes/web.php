<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleAuthController;

Route::get('/', function () {
    return view('landing.welcome');
});

Route::get('/home', function () {
  return view('home');
})->name('home');

Route::get('/curriculo', function () {
  return view('curriculo');
})->name('curriculo');

Route::get('/vagas', function () {
  return view('vagas');
})->name('vagas');

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('/register', [LoginController::class, 'create'])->name('login.register');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');

Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');