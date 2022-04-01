<?php

use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Auth::routes();
Route::get('/pho/create', [\App\Http\Controllers\PictureController::class, 'create']);
Route::post('/pho', [\App\Http\Controllers\PictureController::class, 'store']);
Route::get('/pho/{picture}', [\App\Http\Controllers\PictureController::class, 'show']);
Route::delete('/delete-pho/{id}', [\App\Http\Controllers\PictureController::class, 'destroy']);

Route::get('/search', [PictureController::class, 'search']);

Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/add-category', [\App\Http\Controllers\CategoriesController::class, 'create']);
Route::post('/add-category', [\App\Http\Controllers\CategoriesController::class, 'store']);

Route::get('/profile/{user}', [App\Http\Controllers\IndexController::class, 'index'])->name('index.show');
Route::get('/profile/me/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/me', [App\Http\Controllers\IndexController::class, 'me'])->name('index.me');

Route::post('comments', Config::get('comments.controller') . '@store')->name('comments.store');
Route::delete('comments/{comment}', Config::get('comments.controller') . '@destroy')->name('comments.destroy');
Route::put('comments/{comment}', Config::get('comments.controller') . '@update')->name('comments.update');
Route::post('comments/{comment}', Config::get('comments.controller') . '@reply')->name('comments.reply');



