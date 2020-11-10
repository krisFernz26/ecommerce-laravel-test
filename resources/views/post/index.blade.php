@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Posts</h5>
        <a href="/posts/create">Create Post</a>
        <ol>
            @foreach ($posts as $post)
            <li>
                <a target="_blank" href="/posts/{{$post->id}}">{{$post->name}}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection