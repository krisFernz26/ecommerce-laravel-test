@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create Order</h5>
        <h5>(Note: Authentication will come later)</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/orders" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s5">
                        <select name="quantity" id="quantity">
                            @foreach($quantities as $quantity)
                            <option value="{{ $quantity }}">{{ $quantity }}</option>
                            @endforeach
                        </select>
                        <label>Order Quantity</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select id="user" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                            @endforeach
                        </select>
                        <label>User</label>
                    </div>
                    <div class="input-field col s6">
                        <select id="post" name="post_id">
                            @foreach ($posts as $post)
                            <option value="{{$post->id}}">Title: {{$post->title}}
                            </option>
                            @endforeach
                        </select>
                        <label>Post</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Create
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection