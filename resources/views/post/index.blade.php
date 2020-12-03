@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Posts</h5>
        <h6><a href="/posts/create">Create Post</a></h6>
        <table class="highlight">
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>SELLER</th>
                    <th>DATE POSTED</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td> <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                    <td> <a href="/users/{{ $post->user->id }}"></a>{{ $post->user->first_name }}
                        {{ $post->user->last_name }}</td>
                    <td> {{ $post->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="center">{{$posts->links()}}</p>
    </div>
</div>
@endsection