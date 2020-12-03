@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Order for post: {{ $order -> post->title }}</span>
                    <h6>Buyer:</h6>
                    <a href="/users/{{ $order->user->id }}">{{ $order->user->first_name }}
                        {{ $order->user->last_name }}</a>
                    @if($order->payment != null)
                    <h6>Payment Amount:</h6>
                    <a href="/payments/{{ $order->payment->id }}">Php
                        {{ $order->payment->payment_amount }}</a>
                    <h6>Payment Type:</h6>
                    <p>{{$order->payment->payment_type->name}}</p>
                    <h6>Payment Date:</h6>
                    <p>{{$order->payment->created_at}}</p>
                    @else
                    <h5>Payment not completed</h5>
                    @if (auth()->user()->id == $order->user->id)
                    <a href="/payments/create">Pay now!</a>
                    @endif
                    @endif
                </div>
                <div class="card-action pink darken-3">
                    <a class="pink-text text-lighten-5" href="/orders/{{$order->id}}/edit">Edit</a>
                </div>
            </div>
        </div>
    </div>
    @endsection