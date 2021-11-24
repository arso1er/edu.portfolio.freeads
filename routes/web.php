<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;

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
Route::get('/', [PagesController::class, 'index'])->name('root');

// Route::resource('/ads', AdsController::class);
Route::get('/ads', [AdsController::class, 'index'])->name('ads');



Auth::routes(['verify' => true]);

Route::get('/user/ads/create', [AdsController::class, 'create']);
Route::post('/ads', [AdsController::class, 'store']);
Route::get('/user/ads/{id}/edit', [AdsController::class, 'edit']);
Route::put('/ads/{id}', [AdsController::class, 'update']);
Route::delete('/ads/{id}', [AdsController::class, 'destroy']);
Route::get('/user/my-ads', [AdsController::class, 'myAds']);

Route::get('/profile', [UsersController::class, 'profile']);
Route::get('/user/{id}/edit', [UsersController::class, 'edit']);
Route::put('/user/{id}', [UsersController::class, 'update']);
Route::delete('/user/{id}', [UsersController::class, 'destroy']);

Route::get('/dashboard', [HomeController::class, 'index']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
