<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $posts = \App\Post::orderBy('id','DESC')->paginate(10)->where('post_status', 'PUBLIED');;
       return view('home', ['posts' => $posts]);
    }

    public function profile()
    {
        return view('/profile');
    }

    public function permissionDenied()
    {
        return view('nopermission');
    }

}
