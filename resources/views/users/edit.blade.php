@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit User</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/users/{{$user->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="first_name"
                            value="{{$user->first_name}}">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="last_name"
                            value="{{$user->last_name}}">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email" value="{{$user->email}}">
                        <label for="email">Email</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password"
                                value="{{$user->password}}">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="address" type="text" class="validate" name="address" value="{{$user->address}}">
                        <label for="address">Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select id="user-types" name="user_type_id" value="{{$user->user_type_id}}">
                            @foreach ($userTypes as $userType)
                            <option value="{{$userType->id}}">{{$userType->name}}: {{$userType->description}}</option>
                            @endforeach
                        </select>
                        <label>User Type:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection