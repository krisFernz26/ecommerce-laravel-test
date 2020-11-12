@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <h6 style="margin-left: 1em">Payment Type ID:{{ $payment ->  id }}</h6>
                        <p style="margin-left: 2em">{{ $payment ->  payment_date }}</p>
                        <h6 style="margin-left: 1em">{{ $payment ->  payment_amount }}</h6>
                        
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