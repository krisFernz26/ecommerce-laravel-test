@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create Post</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/user-types" method="POST">
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
                  <?php /*<div class="row">
                    <div class="input-field col s12">
                        <select id="user-types" name="user_type_id">
                            @foreach ($usersId as $userId)
                            <option value="{{$user->id}}">{{$user->first_name}}: {{$user->last_name}}</option>
                            @endforeach
                        </select>
                        <label>User Id:</label>
                    </div>
                    <div class="input-field col s12">
                        <select id="user-types" name="user_type_id">
                            @foreach ($productsId as $productId)
                            <option value="{{$product->id}}">{{$product->name}}: {{$product->quantity}}</option>
                            @endforeach
                        </select>
                        <label>User Id:</label>
                    </div>
                </div> 
                */ ?>
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