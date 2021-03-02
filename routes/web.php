<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login');

Route::get('/admin/dashboard', [AdminDashboard::class, 'index']);

Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

Route::get('/user', [UserController::class, 'index']);

Route::post('/admin/dashboard', [LogoutController::class, 'store']);
