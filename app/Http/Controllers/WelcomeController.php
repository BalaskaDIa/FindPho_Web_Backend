<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Picture;
use App\Models\Welcome;
use App\Http\Requests\StoreWelcomeRequest;
use App\Http\Requests\UpdateWelcomeRequest;
use App\Models\User;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Categories::all();
        $picture = Picture::all();

        return view('welcome',compact('categories','picture'));
    }
}
