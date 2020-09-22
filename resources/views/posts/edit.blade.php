@extends('layouts.main')

@section('content')
    <h1>แก้ไขโพสต์</h1>

    <form action="{{route('posts.update', ['post' => $post->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" required value="{{$post->title}}">
            <small id="titleHelp" class="form-text text-muted">Post Title is required</small>
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea class="form-control" id="content" name="content">{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">แก้ไข</button>
    </form>

     <hr>

    <h2>Danger Zone</h2>
    <form action="{{route('posts.destroy',['post'=>$post->id])}}", method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">ลบโพสต์</button>
    </form>





@endsection
