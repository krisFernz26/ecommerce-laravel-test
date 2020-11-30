@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Welcome</h5>
        <ol>
            <li><a href="/login">Register/ Login</a></li>
            @if(auth()->user())
            <li>Create Types
                (<a href="/payment-types" target="_blank">Payments</a>,
                <a href="/product-types" target="_blank">Products</a>
                )</li>
            <li>Create <a href="/posts" target="_blank">Post</a></li>
            <li>Add <a href="/products" target="_blank">Product\s</a> to Post</li>
            <li>Create <a href="/orders" target="_blank">Order</a></li>
            <li>Create <a href="/payments" target="_blank">Payment</a></li>
            @endif
        </ol>
        <p>(Note: Links on the list will open a new tab)</p>
    </div>
</div>
@endsection