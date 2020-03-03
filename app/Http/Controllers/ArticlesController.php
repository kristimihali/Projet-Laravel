<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function index(){
    	 return view('articles');
    }

    public function show($post_name) {
	   $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
		return view('posts/single',array( //Pass the post to the view
		   'post' => $post,
	   ));
	}

	public function create()
	{
		// Show create post form
		return view('posts.create');
	}

	// public function store(Request $request)
	// {
	// 	// Validate posted form data
	// 	// $validated = $request->validate([
	// 	// 	'title' => 'required|string|unique:posts|min:5|max:100',
	// 	// 	'content' => 'required|string|min:5|max:2000',
	// 	// 	'category' => 'required|string|max:30'
	// 	// ]);

	// 	// // Create slug from title
	// 	// $validated['slug'] = Str::slug($validated['title'], '-');

	// 	// Create and save post with validated data
	// 	$post = Post::create($validated);

	// 	// Redirect the user to the created post with a success notification
	// 	return redirect(route('posts.show', [$post->slug]))->with('notification', 'Post created!');
	// }

}
