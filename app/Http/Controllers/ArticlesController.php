<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Laravelista\Comments\Commentable;
use App\Post;
use Auth;

class ArticlesController extends Controller
{
    function index()
    {
        $posts = \App\Post::all();
		return view('articles', ['posts' => $posts]);
    }

    public function create()
    {
      return view('admin.create');
    }

    public function show($post_name)
    {
	   $post = \App\Post::where('post_name', $post_name)->first(); //get first post with post_name == $post_name

	   return view('posts/single', ['post' => $post]);
	}

	/**
	 * Store a new blog post.
	 *
	 * @param  Request  $request
	 * @return PostResponse
	 */
	public function save(PostRequest $request)
	{
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'name' => 'required',
            'type' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->post_content = $request->input('title');
        $post->post_title = $request->input('content');
        $post->post_status = $request->input('status');
        $post->post_name = $request->input('name');
        $post->post_type = $request->input('type');
        $post->post_category = $request->input('category');
        $post->save();

        return redirect()->back()->withErrors(['Post saved successfully.']);
	}

	/**
	 * show the for for editing the specified resource
	 * 
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 **/
	public function edit($id)
    {
		$post = Post::find($id);
		return view('admin.edit')->with('post', $post);
	}

	public function update(PostRequest $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'name' => 'required',
            'type' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $post = Post::find($id);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->user_id = Auth::user()->id;
        $post->post_content = $request->input('title');
        $post->post_title = $request->input('content');
        $post->post_status = $request->input('status');
        $post->post_name = $request->input('name');
        $post->post_type = $request->input('type');
        $post->post_category = $request->input('category');

        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect()->back()->withErrors(['Post updated successfully.']);
	}

    public function destroy($id)
    {
        $post = Post::find($id);

        //Check if post exists before deleting
        if (!isset($post)){
            return redirect('/posts')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();

        return redirect()->back()->withErrors(['Post deleted successfully.']);;
    }

}
