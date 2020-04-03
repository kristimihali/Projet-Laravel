@extends('layouts/main')

@section('content')

<h1>Articles</h1>

<ul>
    @foreach ($posts as $post)

        <li><a href = "/articles/<?=$post->post_name?>"> {{ $post->post_title }}</a></li>

    @endforeach
</ul>

@endsection
