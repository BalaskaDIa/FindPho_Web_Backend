<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new CategoryRequest())->rules());
        if  ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }

        $categories = new Categories();
        $categories->fill($request->all());
        $categories->save();
        return response()->json($categories, 201);
    }

    public function show(int $id)
    {
        $categories = Categories::find($id);
        if (is_null($categories)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kategória."], 404);
        }
        return response()->json($categories);
    }
    public function create(){
        $categories = Categories::all();
        return view('picture.create',compact('categories'));
    }

    public function update(CategoryUpdateRequest $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new CategoryUpdateRequest())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $categories = Categories::find($id);
        if (is_null($categories)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kategória."], 404);
        }
        $categories->fill($request->all());
        $categories->save();
        return response()->json($categories, 200);
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
