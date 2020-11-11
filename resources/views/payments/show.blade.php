@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">{{ $payment -> name }}</span>
                        <h6 style="margin-left: 1em">Payment Type ID:</h6>
                        <p style="margin-left: 2em">{{ $payment ->  id }}</p>
                        <h6 style="margin-left: 1em">Description:</h6>
                        <p style="margin-left: 2em">{{ $payment -> description }}</p>
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/user-types/{{$payment->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/user-types/{{$payment->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection