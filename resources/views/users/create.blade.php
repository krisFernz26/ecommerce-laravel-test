@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create User</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/users" method="POST">
                @include('layouts.errors')
                @csrf
                <div class="row">
                    <div class="input-field col s6">
                        <input required placeholder="Placeholder" id="first_name" type="text" class="validate"
                            name="first_name">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input required id="last_name" type="text" class="validate" name="last_name">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input required id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input required id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input required id="address" type="text" class="validate" name="address">
                        <label for="address">Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select id="user_type" name="user_type_id" required>
                            <option value="" selected></option>
                            @foreach ($userTypes as $userType)
                            <option value="{{$userType->id}}">{{$userType->description}}</option>
                            @endforeach
                        </select>
                        <label>User Type:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Create
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