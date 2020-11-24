@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s6">
                <div class="card pink darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Order for post: {{ $order -> post_title }}</span>
                        <h6 style="margin-left: 1em">Quantity:</h6>
                        <p style="margin-left: 2em">{{ $order ->  quantity }}</p>
                        <h6 style="margin-left: 1em">Buyer:</h6>
                        <p style="margin-left: 2em">{{ $order -> user }}</p>
                        <h6 style="margin-left: 1em">Payment Date:</h6>
                        <p style="margin-left: 2em">
                            @if ($order->date_completed == null)
                            Not yet completed!</p>
                        @else
                        {{ $order -> date_completed }}</p>
                        @endif
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/orders/{{$order->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/orders/{{$order->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection