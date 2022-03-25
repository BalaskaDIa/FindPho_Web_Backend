<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PictureController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('/users', UserController::class);
Route::resource('/picture', PictureController::class);
Route::resource('/categories', CategoriesController::class);
Route::resource('/category_picture', Category_Picture::class);
Route::get('/livesearch', [\App\Http\Controllers\PictureController::class, 'search']);


