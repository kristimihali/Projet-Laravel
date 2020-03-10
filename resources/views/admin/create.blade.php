@extends('layouts/main')

@section('content')

<h1>Create Post</h1> <br>
    <div id = 'success'>
        @if($errors->any())

        <h6>{{$errors->first()}}</h6>
        @endif
    </div>
        <form method="post" class = "callout primary" action = "{{ route('articles.store') }}">
            Post Name: <input type="text" id="name" name="name" placeholder="Write your post name" value="{{ old('name') }}">
            <div>{{ $errors->first('name') }}</div>
            Post title:   <input type="text" id="title" name="title"  placeholder="Write a Title" value="{{ old('title') }}">
            <div>{{ $errors->first('title') }}</div>
            Post Status:   <input type="text" id="status" name="status"  placeholder="Write a Status" value="{{ old('status') }}">
            <div>{{ $errors->first('status') }}</div>
            Post Category:   <input type="text" id="category" name="category"  placeholder="Write a category" value="{{ old('category') }}">
            <div>{{ $errors->first('category') }}</div> 
            Post Type:   
            <input type="text" id="type" name="type"  placeholder="Write a Type" value="{{ old('type') }}">
            <div>{{ $errors->first('type') }}</div> 
            <!-- <select id="type">
                <option value="article" id='article' name="article">Article</option>
                <option value="post" id ="post" name="post">Post</option>
            </select> -->
            <div>{{ $errors->first('type') }}</div>
            Content:  <textarea id="content" style="min-height: 150px" name="content" placeholder = "Write Content" value="{{ old('content') }}"></textarea>
            <div>{{ $errors->first('content') }}</div>
            <input type="submit" class="button" value="Envoie">
            {{ csrf_field() }}
        </form>

@endsection
