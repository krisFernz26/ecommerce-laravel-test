<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('post.index' , compact('posts'));
    }
    public function create(){
        $products = Product::all();
        return view('post.create', compact('products'));
    }

    
    public function show($postId){
        $post = Post::find($postId);
        return view('post.show', compact('post'));
    }

    
    public function edit($postId){
        $post = Post::find($postId);
        $products = Product::all();
        return view('post.edit', compact('post','products'));
    }

    
    public function store(){

        // Create a new Post
        $validated = request()->validate([
            'title'=>'required',
            'description' => 'required',
            'user_id' => 'required',
            'sold' => 'required'
        ]);

        $post = Post::create($validated);

        return redirect('/posts');
        
    }

    public function update(Post $post){

        $validated = request()->validate([
            'title'=>'required',
            'description' => 'required',
            'user_id' => 'required',
            'sold' => 'required'
        ]);

       
        $post->update($validated);

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

