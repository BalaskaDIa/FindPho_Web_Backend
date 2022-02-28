<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{

    public function index($user)
    {
        $user = \App\Models\User::findOrFail($user);


        return view('profiles.index', [
            'user' => $user
        ]);
    }


}
