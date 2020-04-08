@extends('layouts/main')

@section('content')

<h1>Edit Post</h1> <br>
    <div id = 'success'>
        @if($errors->any())

        <h6>{{$errors->first()}}</h6>
        @endif
    </div>
        <form method="post" class = "callout primary" action = "{{ route('user.update', $post->id) }}">
            @method('PUT')
            @csrf
            Post Name: <input type="text" id="name" name="name"  value="{{ $post->post_name }}">
            <div>{{ $errors->first('name') }}</div>
            Post title:   <input type="text" id="title" name="title"  value="{{ $post->post_title  }}">
            <div>{{ $errors->first('title') }}</div>
            Post Status:   <input type="text" id="status" name="status"  value="{{$post->post_status}}">
            <div>{{ $errors->first('status') }}</div>
            Post Category:   <input type="text" id="category" name="category"  value="{{$post->post_category}}">
            <div>{{ $errors->first('category') }}</div> 
            Post Type:   
            <input type="text" id="type" name="type"  placeholder="Write a Type" value="{{$post->post_type}}">
            <div>{{ $errors->first('type') }}</div> 
            <!-- <select id="type">
                <option value="article" id='article' name="article">Article</option>
                <option value="post" id ="post" name="post">Post</option>
            </select> -->
            <div>{{ $errors->first('type') }}</div>
            Content:  <textarea id="content" style="min-height: 150px" name="content" >{{$post->post_content}}</textarea>
            <div>{{ $errors->first('content') }}</div>
            <input type="submit" class="button" value="Envoie">
            {{ csrf_field() }}
        </form>

@endsection
