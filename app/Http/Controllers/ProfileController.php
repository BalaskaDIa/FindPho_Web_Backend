<?php

namespace App\Http\Controllers;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function index(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles.index', compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('profiles.edit', ['user' => $user]);
    }
    public function update(User $user){
        $data = request()->validate([
                'title' => 'required|max:50',
                'description' => 'required|max:255',
                'url' => 'url|max:255',
                'image' => 'image',
            ]);



        if(request('image')){
            $imagePath = request('image')->store('profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(800,800); //Gotta adjust that later
            $image->save();

            $imageArray =['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }



}
