@extends('layouts.main')

@section('content')
    <h1>สร้างโพสต์ใหม่</h1>
{{--    action Store creat new object--}}
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" required>
            <small id="titleHelp" class="form-text text-muted">Post Title is required</small>
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">สร้าง</button>
    </form>



@endsection
