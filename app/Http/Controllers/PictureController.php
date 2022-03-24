<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureUpdateRequest;
use App\Models\Categories;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use function auth;
use function public_path;
use function redirect;
use function request;
use function response;
use function view;

class PictureController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //$picture = Picture::all();
        $picture = Picture::with('categories')->get();
        return response()->json($picture);
    }

    public function create(){
        $categories = Categories::all();
        return view('picture.create',compact('categories'));
    }

    public function store()
    {
        /*$validator = Validator::make($request->all(), (new PictureRequest())->rules());
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
        return response()->json($picture, 201);*/
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
            'categories_id' => 'required'

        ]);

        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200); //Gotta adjust that later
        $image->save();


        auth()->user()->picture()->create([
            'caption' => $data['caption'],
            'categories_id' => $data['categories_id'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' .auth()->user()->id);
    }

    public function show(\App\Models\Picture $picture)
    {
        return view('picture.show',compact('picture'));
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

    public function search(Request $request){
        $pics=Picture::where('caption','LIKE','%'.$request->keywords.'%')->get();
        return response()->json($pics);
    }
}