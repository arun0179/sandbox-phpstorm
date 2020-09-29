@extends('layouts.main')

@section('content')
    <h1>รายการโพสต์ทั้งหมด</h1>

    @if(Auth::check())
    <a href="{{route('posts.create')}}" class="mb-3" style="font-size:30px">สร้างโพสต์ใหม่</a>
    <p>Hello {{  Auth::user()->name }}</p>
    @endif
    {{$posts->links()}}

    @foreach($posts as $post)
        <div class="card mb-3" style="width: 45rem;">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">
                    {{$post->created_at->diffForHumans()}}
                    by
                    {{ $post->user->name}}
                </p>
                <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-primary">Go to post</a>
            </div>
        </div>
    @endforeach

@endsection
