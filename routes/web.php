<?php

use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\Auth\ProfileController;
use App\Http\Controllers\Front\Auth\RegisterController;
use App\Http\Controllers\Front\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('logout', [ProfileController::class, 'logout'])->name('logout');
