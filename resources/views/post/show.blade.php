@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">{{ $post -> title }}</span>
                        <h6 style="margin-left: 1em">Description:</h6>
                        <p style="margin-left: 2em">{{ $post -> description }}</p>
                        <?php /* <h6 style="margin-left: 1em">Post ID:</h6>
                        <p style="margin-left: 2em">{{ $post ->  id }}</p> */ ?>
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/posts/{{$post->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/posts/{{$post->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection