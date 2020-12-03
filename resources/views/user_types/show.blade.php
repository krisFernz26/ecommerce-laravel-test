@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">User Type: {{ $userType -> name }}</span>
                        <h6>Description:</h6>
                        <p>{{ $userType -> description }}</p>
                        <h6>Users:</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userType->users as $user)
                                <tr>
                                    <td><a href="/users/{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td><a href="/users/{{$user->id}}/edit">Edit</a> | <a
                                            href="/users/{{$user->id}}/delete">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/user-types/{{$userType->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/user-types/{{$userType->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection