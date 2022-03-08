<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/pho/create', [App\Http\Controllers\Api\PictureController::class, 'create']);
Route::post('/pho', [App\Http\Controllers\Api\PictureController::class, 'store']);
Route::get('/pho/{picture}', [App\Http\Controllers\Api\PictureController::class, 'show']);

Route::get('/profile/{user}', [App\Http\Controllers\IndexController::class, 'index'])->name('index.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/me', [App\Http\Controllers\IndexController::class, 'me'])->name('index.me');
