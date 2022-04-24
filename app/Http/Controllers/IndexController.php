<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        $user = User::find($user);
        $pictures = $user->picture()->paginate(9);
        return view('profiles.index', compact('user', 'pictures'));
    }
    public function me(){
        return $this->index(Auth::user()->id);
    }

}
