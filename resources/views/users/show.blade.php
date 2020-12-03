@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card" style="width: 100%">
                    <div class="card-content">
                        <span class="card-title">{{ $user->first_name }} {{ $user->last_name }}</span>
                        <h6>Email:</h6>
                        <p>{{ $user->email }}</p>
                        <h6>Address:</h6>
                        <p>{{ $user->address }}</p>
                        <h6>User Type:</h6>
                        <p>{{ $user->user_type->name }}</p>
                        <br>
                        <a href="/products/create">Add a Product</a>
                        <br>
                        <h5>Posts</h5>
                        <a href="/posts/create">Add a Post</a>
                        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date Posted</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                        @if ($post->sold)
                                        Sold!
                                        @else
                                        Available
                                        @endif</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <h5>Orders</h5>
                        <a href="/orders/create">Add an Order</a>
                        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Post Title</th>
                                    <th>Payment Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->orders as $order)
                                <tr>
                                    <td><a href="/posts/{{$order->post->id}}">{{$order->post->title}}</a></td>
                                    <td><a href="/payments/{{$order->payment->id}}">{{$order->payment->updated_at}}</a>
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