@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5 style="margin-left: 1em">Payment</h5>
                        <h6 style="margin-left: 2em">Payment Type ID: {{ $payment->payment_type->name }}</h6>
                        <h6 style="margin-left: 2em">Order: <a
                                href="/orders/{{ $payment->order->id}}">{{ $payment->order->post->title }}</a></h6>
                        <p style="margin-left: 2em">Payment Date: {{ $payment ->  created_at }}</p>
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