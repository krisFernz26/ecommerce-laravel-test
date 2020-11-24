@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>User Types</h5>
        <a href="/user-types/create">Create User Type</a>
        <ol>
            @foreach ($userTypes as $userType)
            <li>
                <a target="_blank" href="/user-types/{{$userType->id}}">{{$userType->name}}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection