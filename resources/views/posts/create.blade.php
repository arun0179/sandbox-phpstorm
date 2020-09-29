@extends('layouts.main')

@section('content')
    <h1>สร้างโพสต์ใหม่</h1>
{{--    show all errors--}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{  $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
{{--            add class is-invalid--}}
{{--            have function old when you can't store because of condition you still can see th message you--}}
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                   name="title" aria-describedby="titleHelp" required
                   value="{{  old('title') }}" >
            <small id="titleHelp" class="form-text text-muted">Post Title is required</small>
            @error('title')
{{--                message in @error this message is special variable that get error message display--}}
                <div class="alert alert-danger">{{  $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{  old('content') }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{  $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">สร้าง</button>
    </form>



@endsection
