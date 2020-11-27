@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Posts</h5>
        <a href="/posts/create">Create Post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>SELLER</th>
                    <th>PRODUCTS</th>
                    <th>DATE POSTED</th>
                    <th>STATUS</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td> {{ $post->title }}</td>
                    <td> {{ $post->description }}</td>
                    <td> <a href="/users/{{ $post->user->id }}"></a>{{ $post->user->first_name }}
                        {{ $post->user->last_name }}</td>
                    <td> <a href="/posts/{{ $post->id }}">Show Products</a></td>
                    <td> {{ $post->created_at }}</td>
                    <td> @if ($post->sold)
                        Not yet sold
                        @else
                        Available
                        @endif</td>
                    <td> <a href="/posts/{{ $post->id }}">Display</a>
                        |
                        <a href="/posts/{{ $post->id }}/edit">Edit</a>
                        |
                        <a href="/posts/{{ $post->id }}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection