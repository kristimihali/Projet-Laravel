<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DemoController extends Controller
{
    public function adminDemo(){

        $posts = \App\Post::all();
        $userRoles = Auth::user()->roles->pluck('name');

        if(!$userRoles->contains('Admin')){
          
            return redirect('/nopermission');
        }
        return view('/admin.dashboard',array(
            'posts' => $posts));
    }

    public function userDemo(){
        $id = Auth::user()->id;

        // $posts = \App\Post::where('user_id', 13);
        $posts = DB::select("select * from 'posts' where user_id = $id");
        return view('/user.profile', array(
             'posts' => $posts 
        ));
        // return view('/user/profile');
    }
    public function permissionDenied(){
        return view('nopermission');
    }
}
