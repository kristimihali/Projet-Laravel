<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Post;
use Auth;

class ArticlesController extends Controller
{
    function index(){
		return view('articles');
    }

    public function show($post_name) {
	   $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_name == $post_name
		return view('posts/single',array( //Pass the post to the view
		   'post' => $post,
	   ));
	}

	public function create()
	{
		return view('admin.create');
	}

	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
 
		return redirect()->back()->withErrors(['Post deleted successfully.']);;
	}

	/**
	 * Store a new blog post.
	 *
	 * @param  Request  $request
	 * @return PostResponse
	 */
	public function save(PostRequest $request)
	{
		// $validated = $request->validated();
		// The blog post is valid...

		$post = new Post;
		$post->user_id = Auth::user()->id;
		$post->post_date = now();
		$post->post_content = $request->content;
		$post->post_title = $request->title;
		$post->post_status = $request->status;
        $post->post_name = $request->name;
		$post->post_type = $request->type;
		$post->post_category = $request->category;

        $post->save();
        //echo "submit successful";
        return redirect()->back()->withErrors(['Post saved successfully.']);
	}

	/**
	 * show the for for editing the specified resource
	 * 
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 **/
	public function edit($id){
		$post = Post::find($id);
		return view('admin.edit')->with('post', $post);
	}

	public function update(PostRequest $request, $id){
		
		$post_id = $request->input('id');
		$post = Post::find($id);
		// $post = Post::where('id', '=', $id)->first();
		$post->user_id = Auth::user()->id;
		$post->post_date = now();
		$post->post_content = $request->content;
		$post->post_title = $request->title;
		$post->post_status = $request->status;
        $post->post_name = $request->name;
		$post->post_type = $request->type;
		$post->post_category = $request->category;

        $post->save();
        //echo "submit successful";
        return redirect()->back()->withErrors(['Post updated successfully.']);

	}

	
}
