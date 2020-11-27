@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>User Types</h5>
        <a href="/user-types/create">Create User Type</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Users</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userTypes as $userType)
                <tr>
                    <td>{{$userType->name}}</td>
                    <td>{{$userType->description}}</td>
                    <td>
                        <a href="/user-types/{{$userType->id}}">Show Users</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection