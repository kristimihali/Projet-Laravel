@extends('layouts/main')

@section('content')
<h1>Article: 
<div class='card-body'>
    
    <?=$post->post_title?></h1>

    <?=$post->author->name?></h1>
    <br>
    
    <p><?=$post->post_content?></p>
    <div class = 'card-body'>
    <h3>COMMENT BOX</h3>
            @comments(['model' => $post])
    </div>
</div>
@endsection
