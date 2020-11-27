@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Order for post: {{ $order -> post->title }}</span>
                    <h6 style="margin-left: 1em">Buyer:</h6>
                    <a style="margin-left: 2em" href="/users/{{ $order->user->id }}">{{ $order->user->first_name }}
                        {{ $order->user->last_name }}</a>
                    @if($order->payment != null)
                    <h6 style="margin-left: 1em">Payment Amount:</h6>
                    <a style="margin-left: 2em" href="/payments/{{ $order->payment->id }}">Php
                        {{ $order->payment->payment_amount }}</a>
                    <h6 style="margin-left: 1em">Payment Type:</h6>
                    <p style="margin-left: 2em">{{$order->payment->payment_type->name}}</p>
                    <h6 style="margin-left: 1em">Payment Date:</h6>
                    <p style="margin-left: 2em">{{$order->payment->created_at}}</p>
                    @else
                    <h5>Payment not completed</h5>
                    @endif
                </div>
                <div class="card-action pink darken-3">
                    <a class="pink-text text-lighten-5" href="/orders/{{$order->id}}/edit">Edit</a>
                    <a class="pink-text text-lighten-5" href="/orders/{{$order->id}}/delete">Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endsection