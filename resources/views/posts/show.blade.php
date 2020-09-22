@extends('layouts.main')

@section('content')
    <h1>{{$post->title}}</h1>

    <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-info">แก้ไขโพสต์</a>


    <p>Created at: {{$post->created_at}}</p>
    <p>View: {{$post->view_count}}</p>
    <p>{{$post->content}}</p>


@endsection
