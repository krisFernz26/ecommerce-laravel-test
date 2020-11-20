@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Users</h5>
        <a href="/users/create">Create User</a>
        <ol>
            @foreach ($users as $user)
            <li> <a target="_blank" href="/users/{{$user->id}}">{{ $user ->  first_name }} {{ $user ->  last_name }}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection