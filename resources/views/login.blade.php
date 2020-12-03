@extends('layouts.master')

@section('content')
<div class="container" style="padding-top: 5%;">
    <div class=" section">
        <div class="centered">
            <div class="card center" style="width: 50%">
                <div class="card-content">
                    <h5>Login</h5>
                    <div class="row"></div>
                    <div class="row">
                        <form class="col s12" action="/login" method="POST">
                            @include('layouts.errors')
                            @csrf
                            <div class="row ">
                                <div class="input-field col s12 ">
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
                    </form>
                    <a href="/register">Don't have an account yet? Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection