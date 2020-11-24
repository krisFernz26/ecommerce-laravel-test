@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <h5 style="margin-left: 1em">Payment</h5>
                        <p style="margin-left: 2em">Payment Type ID: {{ $payment ->  id }}</h6>
                            <p style="margin-left: 2em">Payment Date: {{ $payment ->  payment_date }}</p>
                            <p style="margin-left: 2em">Payment Amount: php {{$payment ->  payment_amount }}</h6>

                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/payments/{{$payment->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/payments/{{$payment->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection