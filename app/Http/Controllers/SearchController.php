<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $pics=Picture::where('title','LIKE','%'.$request->keywords.'%')->get();
        return response()->json($pics);
    }
}
