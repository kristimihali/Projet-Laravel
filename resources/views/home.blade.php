@extends('layouts/main')

@section('background-image')
    background-image: url('images/home-bg.jpg')
@endsection

@section('content')
    @foreach ($posts as $post)
        <div class="post-preview">
            <a href="/article/{{ $post->post_name }}">
                <h2 class="post-title">
                    {{ $post->post_title }}
                </h2>
                <p class="post-meta">Posted by  {{ $post->author->name }} on {{ $post->created_at }}
                </p>
                <div>
                    <img src="{{ $post->cover_image }}"/>
                    <p class="post-subtitle">
                        {{ $post->post_content }}
                    </p>
                </div>
            </a>

        </div>
        <hr/>
    @endforeach
@endsection