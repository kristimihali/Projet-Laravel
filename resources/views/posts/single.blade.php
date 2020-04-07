@extends('layouts/main')

@section('background-image')
    background-image: url('../images/post-sample.jpg')
@endsection

@section('content')
    <div class="post-preview">
        <h2 class="post-title">
            <?=$post->post_title?>
        </h2>
        <h3 class="post-subtitle">
            <?=$post->post_content?>
        </h3>
        <p class="post-meta">Posted by
            <?=$post->author->name?>
            on September 24, 2019
        </p>
        <div>
             <h3>COMMENT LIST</h3>
             <hr/>
             @comments(['model' => $post])
        </div>
    </div>
    <hr/>
@endsection
