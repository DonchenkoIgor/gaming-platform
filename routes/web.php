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

Route::get('/gamezone', [MainController::class, 'index'])->name('main');
Route::get('/gamezone/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/gamezone/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
