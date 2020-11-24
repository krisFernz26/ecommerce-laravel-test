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
        $users = User::all();
        $products = Product::all();
        return view('post.create', compact('users', 'products'));
    }

    
    public function show($postId){
        $post = Post::find($postId);
        return view('post.show', compact('post'));
    }

    
    public function edit($postId){
        $post = Post::find($postId);
        $users = User::all();
        $products = Product::all();
        return view('post.edit', compact('post', 'users', 'products'));
    }

    
    public function store(){

        // Create a new Post
        $validate_fields = request()->validate([
            'title = request()->title' =>'required',
            'description = request()->description' => 'required',
            'user_id = User::find(request()->user_id)->id' => 'required',
            'user = User::find(request()->user_id)->email' => 'required',
            'product_id = Product::find(request()->product_id)->id' => 'required',
            'image = Product::find(request()->product_id)->image' => 'required',
            'sold = false' => 'required'
        ]);

        $post = Post::edit($validate_fields);
        return redirect('/posts');

        /**$post = new Post;
        $post->title = request()->title;
        $post->description = request()->description;
        $post->user_id = User::find(request()->user_id)->id;
        $post->user = User::find(request()->user_id)->email;
        $post->product_id = Product::find(request()->product_id)->id;
        $post->image = Product::find(request()->product_id)->image;
        $post->sold = false;
        $post->save();

        return redirect('/posts');**/
    }

    public function update(Post $post){


          $validate_fields = request()->validate([
            'title = request()->title' =>'required',
            'description = request()->description' => 'required',
            'user_id = User::find(request()->user_id)->id' => 'required',
            'user = User::find(request()->user_id)->email' => 'required',
            'product_id = Product::find(request()->product_id)->id' => 'required',
            'image = Product::find(request()->product_id)->image' => 'required',
            'sold = request()->sold' => 'required'
        ]);

        $post = Post::create($validate_fields);
        return redirect('/posts'.$post->id);

        /**$post->title = request()->title;
        $post->description = request()->description;
        $post->user_id = User::find(request()->user_id)->id;
        $post->user = User::find(request()->user_id)->email;
        $post->product_id = Product::find(request()->product_id)->id;
        $post->image = Product::find(request()->product_id)->image;
        $post->sold = request()->sold;
        $post->save();

        return redirect('/posts/'.$post->id);**/
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

