<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;
use App\Http\Requests\PictureRequest;
use App\Http\Requests\PictureUpdateRequest;
use Illuminate\Support\Facades\Validator;

class PictureController extends Controller
{
    public function index()
    {
        $picture = Picture::all();
        return response()->json($picture);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new PictureRequest())->rules());
        if  ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }

        $picture = new Picture();
        $picture->fill($request->all());
        $picture->save();
        return response()->json($picture, 201);
    }

    public function show(int $id)
    {
        $picture = Picture::find($id);
        if (is_null($picture)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kép."], 404);
        }
        return response()->json($picture);
    }

    public function update(PictureUpdateRequest $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new PictureUpdateRequest())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $picture = Picture::find($id);
        if (is_null($picture)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kép."], 404);
        }
        $picture->fill($request->all());
        $picture->save();
        return response()->json($picture, 200);
    }

    public function destroy(int $id)
    {
        $picture = Picture::find($id);
        if (is_null($picture)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kép."], 404);
        }
        Picture::destroy($id);
        return response()->noContent();
    }
}
