@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5>Payment</h5>
                        <h6>Payment Type ID: {{ $payment->payment_type->name }}</h6>
                        <h6>Order: <a href="/orders/{{ $payment->order->id}}">{{ $payment->order->post->title }}</a>
                        </h6>
                        <p>Payment Date: {{ $payment ->  created_at }}</p>
                        <p>Payment Amount: php {{$payment ->  payment_amount }}</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection