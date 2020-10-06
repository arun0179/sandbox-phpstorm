<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all objects in Post_table in posts;
        //Paginate: หนึ่งหน้าจะมีกี่ดาต้า ; 1 pages 10 data
        $posts = Post::paginate(10);
        //view(resources/views/posts/index)
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('create-post')){
            return redirect()->route('posts.index');
        }
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:5|max:100',
            'content'=>'required|min:5|max:500'
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
//        $post->user_id = $request->user()->id;
//        ตอนเราสร้างโพสต์ก็จะดึงชื่อ  username  เขียนลงดาต้าเบส
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $post->view_count++;
        $post->save();
        //if fail response 404_not_found and can't do anything
        return view('posts.show',[
            //post object : id
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
//        if(Gate::denies('edit-post', $post)){
//            return redirect()->route('post.show',['post'=>$id]);
//        }
        //update() in PostPolicy
        $this->authorize('update',$post);
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $request->validate([
            'title'=>'required|min:5|max:100',
            'content'=>'required|min:5|max:500'
        ]);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
