<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PictureController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DataController;
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

Route::apiResource('/users', UserController::class);
Route::resource('/picture', PictureController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/categories', CategoriesController::class);
Route::get('/livesearch', [\App\Http\Controllers\PictureController::class, 'search']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/allusers', [DataController::class, 'allUsers']);
Route::get('/allphotos', [DataController::class, 'allPhotos']);
Route::get('/allcategories', [DataController::class, 'allCategories']);
Route::get('/janupload', [DataController::class, 'janUpload']);
Route::get('/febupload', [DataController::class, 'febUpload']);
Route::get('/marchupload', [DataController::class, 'marchUpload']);
Route::get('/aprupload', [DataController::class, 'aprUpload']);
Route::get('/mayupload', [DataController::class, 'mayUpload']);
Route::get('/junupload', [DataController::class, 'junUpload']);
Route::get('/categoryFlowers', [DataController::class, 'categoryFlowers']);
Route::get('/categoryCars', [DataController::class, 'categoryCars']);
Route::get('/categoryEyes', [DataController::class, 'categoryEyes']);
Route::get('/categoryDogs', [DataController::class, 'categoryDogs']);
Route::get('/categoryFood', [DataController::class, 'categoryFood']);
Route::get('/categorySpring', [DataController::class, 'categorySpring']);
Route::get('/categoryNature', [DataController::class, 'categoryNature']);
Route::get('/categoryOthers', [DataController::class, 'categoryOthers']);
Route::get('/categoryPeople', [DataController::class, 'categoryPeople']);
Route::get('/categoryWinter', [DataController::class, 'categoryWinter']);





