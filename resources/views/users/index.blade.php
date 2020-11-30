@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Users</h5>
        <a href="/register">Create User</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><a href="/users/{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</a></td>
                    <td><a href="/user-types/{{$user->user_type->id}}">{{$user->user_type->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="center">{{$users->links()}}</p>
    </div>
</div>
@endsection