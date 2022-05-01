<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function allUsers() {
        $allusers = User::where('users.admin', '!=', '1')->count();
        return response()->json($allusers);
    }

    public function allPhotos() {
        $allphotos = Picture::where('pictures.id', '>=', '1')->count();
        return response()->json($allphotos);
    }

    public function allCategories() {
        $allusers = Categories::where('categories.id', '>=', '1')->count();
        return response()->json($allusers);
    }

    public function janUpload() {
        $month = 01;
        $janUpload = Picture::whereMonth('created_at', '=', $month)->count();
        return response()->json($janUpload);
    }

    public function febUpload() {
        $month = 02;
        $janUpload = Picture::whereMonth('created_at', '=', $month)->count();
        return response()->json($janUpload);
    }

    public function marchUpload() {
        $month = 03;
        $janUpload = Picture::whereMonth('created_at', '=', $month)->count();
        return response()->json($janUpload);
    }

    public function aprUpload() {
        $month = 04;
        $janUpload = Picture::whereMonth('created_at', '=', $month)->count();
        return response()->json($janUpload);
    }

    public function mayUpload() {
        $month = 05;
        $janUpload = Picture::whereMonth('created_at', '=', $month)->count();
        return response()->json($janUpload);
    }

    public function junUpload() {
        $month = 06;
        $janUpload = Picture::whereMonth('created_at', '=', $month)->count();
        return response()->json($janUpload);
    }

    public function categoryFlowers() {
        $category = Picture::where('pictures.categories_id', '=', '1')->count();
        return response()->json($category);
    }

    public function categoryCars() {
        $category = Picture::where('pictures.categories_id', '=', '2')->count();
        return response()->json($category);
    }

    public function categoryEyes() {
        $category = Picture::where('pictures.categories_id', '=', '3')->count();
        return response()->json($category);
    }

    public function categoryDogs() {
        $category = Picture::where('pictures.categories_id', '=', '4')->count();
        return response()->json($category);
    }

    public function categoryFood() {
        $category = Picture::where('pictures.categories_id', '=', '5')->count();
        return response()->json($category);
    }

    public function categorySpring() {
        $category = Picture::where('pictures.categories_id', '=', '6')->count();
        return response()->json($category);
    }

    public function categoryNature() {
        $category = Picture::where('pictures.categories_id', '=', '7')->count();
        return response()->json($category);
    }

    public function categoryOthers() {
        $category = Picture::where('pictures.categories_id', '=', '8')->count();
        return response()->json($category);
    }

    public function categoryPeople() {
        $category = Picture::where('pictures.categories_id', '=', '9')->count();
        return response()->json($category);
    }

    public function categoryWinter() {
        $category = Picture::where('pictures.categories_id', '=', '10')->count();
        return response()->json($category);
    }
}