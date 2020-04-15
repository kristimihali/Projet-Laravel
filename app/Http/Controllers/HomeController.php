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
    public function index(Request $request)
    {
        $data = [];
        $posts = \App\Post::orderBy('id','DESC')->paginate(10)->where('post_status', 'PUBLIED');;

        if (!$request->ajax()) {
            $data = view('home', ['posts' => $posts]);
        } else {
            if (count($posts)) {
                foreach($posts as $item) {
                    $item['author_name'] = $item->author->name;
                    unset($item['author']);
                }
            }
            $data = json_encode($posts);
        }

       return $data;
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
