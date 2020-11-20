@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create Post</h5>
        <h5>(Note: Authentication will come later)</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/posts" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="title" type="text" class="validate" name="title">
                        <label for="title">Title</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="description" type="text" class="validate" name="description">
                        <label for="description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select id="user" name="user_id">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                            @endforeach
                        </select>
                        <label>User:</label>
                    </div>
                    <div class="input-field col s6">
                        <select id="product" name="product_id">
                            @foreach ($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}: {{$product->quantity}}</option>
                            @endforeach
                        </select>
                        <label>Product</label>
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