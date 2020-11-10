<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('post.index' , compact('posts'));
    }
    public function create(){
        //$users = User::all();
        $post = Post::all();
        return view('post.create', compact('users'));
    }

    
    public function show($postId){
        $posts = Post::find($postId);
        return view('post.show', compact('posts'));
    }

    
    public function edit($postId){
        $posts = Post::find($postId);
        return view('post.edit', compact('posts'));
    }

    
    public function store(){

        // Create a new User
        $post = new Post;
        $post->title = request()->title;
        $post->description = request()->description;
        //$post->user_id = User::find(request()->user_id)->id;
        //$post->product_id = Product::find(request()->product_id)->id;
        $post->save();

        return redirect('/posts');
    }

    public function update(Post $post){

        $post->title = request()->title;
        $post->description = request()->description;
        //$post->user_id = User::find(request()->user_id)->id;
        //$post->product_id = Product::find(request()->product_id)->id;
        $post->save();

        return redirect('/posts/'.$post->id);
    }

    public function delete($postId){
        $post = Post::find($postId);
        return view('post.delete', compact('post'));
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');
    }
}

