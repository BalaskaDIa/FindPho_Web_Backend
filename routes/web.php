<?php

use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;

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
Route::get('/pho/create', [PictureController::class, 'create']);
Route::post('/pho', [PictureController::class, 'store']);
Route::get('/pho/{picture}', [PictureController::class, 'show']);
Route::delete('/delete-pho/{id}', [PictureController::class, 'destroy']);
Route::get('/search', [PictureController::class, 'search']);

Route::get('/pho/{picture}/edit', [PictureController::class, 'edit'])->name('pho.edit');
Route::patch('/pho-update/{picture}', [PictureController::class, 'update'])->name('pho.update');

Route::get('/categories', [CategoriesController::class, 'index']);

Route::get('/profile/me/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/me', [App\Http\Controllers\IndexController::class, 'me'])->name('index.me');
Route::get('/profile/{user}', [App\Http\Controllers\IndexController::class, 'index'])->name('index.show');

Route::post('comments', Config::get('comments.controller') . '@store')->name('comments.store');
Route::delete('comments/{comment}', Config::get('comments.controller') . '@destroy')->name('comments.destroy');
Route::put('comments/{comment}', Config::get('comments.controller') . '@update')->name('comments.update');
Route::post('comments/{comment}', Config::get('comments.controller') . '@reply')->name('comments.reply');



