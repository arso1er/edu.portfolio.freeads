<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index']);

// Route::resource('/ads', AdsController::class);
Route::get('/ads', [AdsController::class, 'index'])->name('ads');



Auth::routes(['verify' => true]);

Route::get('/user/ads/create', [AdsController::class, 'create']);
Route::post('/ads', [AdsController::class, 'store']);

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
