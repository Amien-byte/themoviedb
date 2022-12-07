<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\nowPlayingController;
use App\Http\Controllers\upcomingController;
use App\Http\Controllers\topRatedController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\crudController;

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

Route::resource('/', dashboardController::class);
Route::resource('/nowplaying', nowPlayingController::class);
Route::resource('/upcoming', upcomingController::class);
Route::resource('/toprated', topRatedController::class);
Route::resource('/crud', crudController::class);
Route::get('/crud/toggle/{id}', 'App\Http\Controllers\crudController@toggle');
Route::resource('/detail/{id}', detailController::class);
