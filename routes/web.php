<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TrackListController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/track', [App\Http\Controllers\TrackController::class, 'index'])->name('track');
Route::post('/track', [App\Http\Controllers\TrackController::class, 'track'])->name('track');
Route::get('/track_list', [App\Http\Controllers\TrackListController::class, 'track_list'])->name('track_list');