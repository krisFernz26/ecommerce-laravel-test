@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit User Type</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/orders/{{$order->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s4">
                        <select id="user" name="user_id" value="{{$order->user_id}}" disabled>
                            <option value="{{auth()->user()->id}}" selected>{{auth()->user()->first_name}}
                                {{auth()->user()->last_name}}</option>
                        </select>
                        <label>User</label>
                    </div>
                    <div class="input-field col s4">
                        <select id="post" name="post_id" value="{{$order->post_id}}"">
                            <option value="" selected></option>
                            @foreach ($posts as $post)
                            <option value=" {{$post->id}}">Title: {{$post->title}}\ Quantity: {{$post->quantity}}
                            </option>
                            @endforeach
                        </select>
                        <label>Post</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection