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


    public function create(){
        $categories = Categories::all();
        return view('picture.create',compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'description' => 'required',
            'title' => 'required',
            'image' => 'required|image',
            'categories_id' => 'required'

        ]);

        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200); //Gotta adjust that later
        $image->save();


        auth()->user()->picture()->create([
            'description' => $data['description'],
            'title' => $data['title'],
            'categories_id' => $data['categories_id'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' .auth()->user()->id);
    }

    public function show(Picture $picture)
    {
        return view('picture.show',compact('picture'));
    }


    public function destroy(int $id)
    {
        $picture = Picture::find($id)->delete();
        if (is_null($picture)) {
            return response()->json(["message" => "A megadott azonosítóval nem található kép."], 404);
        }
        Picture::destroy($id);
        return redirect()->back();
    }

    public function search(Request $request){
        $pics=Picture::where('title','LIKE','%'.$request->keywords.'%')->get();
        return response()->json($pics);
    }
}
