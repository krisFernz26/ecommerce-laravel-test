@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $post->image }}" />
                        <span class="card-title">{{ $post->title}}
                        </span>
                    </div>
                    <div class="card-content">
                        @if ($post->sold)
                        <h4> Sold!</h4>
                        @endif
                        <h6>Seller Email</h6>
                        <p style="margin-left: 1em">{{ $post->user }}</p>
                        <h6>Post Name</h6>
                        <p style="margin-left: 1em">{{ $post->title }}</p>
                        <h6>Post Description</h6>
                        <p style="margin-left: 1em">{{ $post->description }}</p>
                        <h6>Post ID</h6>
                        <p style="margin-left: 1em">{{ $post->id }}</p>
                        <h6>Product ID</h6>
                        <p style="margin-left: 1em">{{ $post->product_id }}</p>
                    </div>
                    <div class="card-action">
                        <a href="/posts/{{$post->id}}/edit">EDIT</a>
                    </div>
                    <div class="card-action">
                        <a href="/posts/{{$post->id}}/delete">DELETE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection