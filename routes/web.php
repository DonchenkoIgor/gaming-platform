<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game-zone', [MainController::class, 'index'])->name('main');
Route::get('/game-zone/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/game-zone/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::get('/game-zone/register', [\App\Http\Controllers\Auth\AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/game-zone/register' , [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
Route::get('/game-zone/auth' , [\App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/game-zone/auth' , [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::post('/game-zone/logout' , [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
Route::get('/game-zone/profile' , [\App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::get('/game-zone/trending', [MainController::class, 'trending'])->name('trending');
Route::post('/game-zone/store', [\App\Http\Controllers\ProfileController::class, 'store'])->name('games.store');
