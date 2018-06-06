<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //Connection on Models

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id; //Adding Relationship on User Model and Post Model
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }
}
