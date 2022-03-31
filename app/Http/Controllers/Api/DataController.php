<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Comment;
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

    public function comments() {
        $comments = Comment::orderBy('comments.created_at')->get()->groupBy(function($data) 
        {
            return $data->created_at->format('Y-m-d');
        });
        //$comments = Comment::all();
        return response()->json($comments);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
