<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $posts = \App\Post::all();
         $posts = \App\Post::orderBy('id','DESC')->paginate(3);
        return view('home',array(
            'posts' => $posts));
    }

    public function profile()
    {
        return view('/profile');
    }
    
}
