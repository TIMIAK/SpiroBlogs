<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[PostController::class ,'index']);
Route::get('dashboard', [HomeController::class , 'dashboard'])->name('dashboard');
// Catigories Route
Route::get('cat/sport', [HomeController::class , 'sport'])->name('cat.sport');
Route::get('cat/education', [HomeController::class , 'education'])->name('cat.education');
Route::get('cat/entertainment', [HomeController::class , 'entertainment'])->name('cat.entertainment');
Route::get('cat/health', [HomeController::class , 'health'])->name('cat.health');
Route::get('cat/politics', [HomeController::class , 'politics'])->name('cat.politics');
Route::get('cat/business', [HomeController::class , 'business'])->name('cat.business');
Route::get('cat/world', [HomeController::class , 'world'])->name('cat.world');
Route::get('cat/technology', [HomeController::class , 'technology'])->name('cat.technology');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('search', [HomeController::class , 'search'])->name('search');
