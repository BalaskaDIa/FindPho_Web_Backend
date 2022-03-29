<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PictureController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/users', UserController::class)->middleware('auth:sanctum');
Route::resource('/picture', PictureController::class);
Route::resource('/categories', CategoriesController::class);
Route::get('/livesearch', [\App\Http\Controllers\PictureController::class, 'search']);
Route::post('/login', [AuthController::class, 'login']);


