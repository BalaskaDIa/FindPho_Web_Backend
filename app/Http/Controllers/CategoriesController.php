<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Categories;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function response;
use function view;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $picture = Picture::all();

        return view('categories.index',compact('categories','picture'));
    }


    public function destroy(int $id)
    {
        $categories = Categories::find($id);
        if (is_null($categories)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kategória."], 404);
        }
        Categories::destroy($id);
        return response()->noContent();
    }
}
