<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MechController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/',function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
//Route::post('/logout', [LogoutController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);

Route::get('/mechs', [MechController::class, 'index'])->name('mechs')
    ->middleware('auth');
Route::post('/mechs', [MechController::class, 'store']);
