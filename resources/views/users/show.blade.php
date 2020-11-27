@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card" style="width: 80%">
                    <div class="card-content">
                        <span class="card-title">{{ $user->first_name }} {{ $user->last_name }}</span>
                        <h6 style="margin-left: 1em">Email:</h6>
                        <p style="margin-left: 2em">{{ $user->email }}</p>
                        <h6 style="margin-left: 1em">Address:</h6>
                        <p style="margin-left: 2em">{{ $user->address }}</p>
                        <h6 style="margin-left: 1em">User Type:</h6>
                        <p style="margin-left: 2em">{{ $user->user_type->name }}</p>
                        <br>
                        <h5>Posts</h5>
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Products</th>
                                    <th>Date Posted</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td><a href="/posts/{{$post->id}}">Show Products</a></td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                        @if ($post->sold)
                                        Sold!
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
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/users/{{$user->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/users/{{$user->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection