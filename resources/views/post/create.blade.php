@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
        <h5>Welcome {{auth()->user()->first_name}}
            {{auth()->user()->last_name}}. Create Post</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/posts" method="POST">
                @include('layouts.errors')
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="title" type="text" class="validate" name="title" required>
                        <label for="title">Title</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="description" type="text" class="validate" name="description" required>
                        <label for="description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select id="user" name="user_id" required>
                            <option value="{{auth()->user()->id}}" selected>{{auth()->user()->first_name}}
                                {{auth()->user()->last_name}}</option>
                        </select>
                        <label>User</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select id="sold" name="sold" required>
                            <option value='1'>Yes</option>
                            <option value='0' selected>No</option>
                        </select>
                        <label>Sold?</label>
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