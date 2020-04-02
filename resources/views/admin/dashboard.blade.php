@extends('layouts/main')

@section('content')

<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-md-12'>
            
            <div class = "pull-left">
                <marquee behavior ="" direction="">CRUD ARTICLES ADMIN PAGE</marquee>
            </div>
            <br>
            <div class = "pull-right">
                <a href = "/create" class = "btn btn-lg btn-success">Add New Article</a>
            </div>

        </div>
    </div>
    @if($errors->any())
        <h6>{{$errors->first()}}</h6>
    @endif
    <table class="table table-bordered table-dark">
        <tr>   
            <th>Name</th>
            <th>Title</th>
            <th>Status</th>
            <th>Category</th>
        </tr>
        @foreach($posts ?? '' as $key => $post)
        <tr>
            <td>{{ $post->post_name }}</td>
            <td>{{ $post->post_title }}</td>
            <td> {{ $post->post_status }}</td>
            <td>{{ $post->post_category }}</td>
            <td>
            <form method="post" action="{{route('articles.destroy',$post->id)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href = "/articles/<?=$post->post_name?>" class="btn btn-danger"> Show</a>
            </form>
            <form method="POST" action="{{ route('admin.edit',$post->id) }}">
                @method('PUT')
                @csrf
                <a href = "/edit/<?=$post->id?>" class="btn btn-danger"> Edit</a>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
