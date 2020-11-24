@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Login</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/login" method="POST">
                @include('layouts.errors')
                @csrf
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
        </div>
        <div class="row">
            <div class="input-field">
                <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">
                    Login
                </button>
            </div>
        </div>
    </div>
    </form>
    <a href="/register">Don't have an account yet? Register here</a>
</div>
</div>
</div>
@endsection