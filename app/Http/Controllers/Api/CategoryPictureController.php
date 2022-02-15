<?php

namespace App\Http\Controllers;

use App\Models\Category_Picture;
use App\Http\Requests\StoreCategory_PictureRequest;
use App\Http\Requests\UpdateCategory_PictureRequest;

class CategoryPictureController extends Controller
{
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
     * @param  \App\Http\Requests\StoreCategory_PictureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory_PictureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_Picture  $category_Picture
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Picture $category_Picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Picture  $category_Picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Picture $category_Picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategory_PictureRequest  $request
     * @param  \App\Models\Category_Picture  $category_Picture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory_PictureRequest $request, Category_Picture $category_Picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Picture  $category_Picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_Picture $category_Picture)
    {
        //
    }
}
