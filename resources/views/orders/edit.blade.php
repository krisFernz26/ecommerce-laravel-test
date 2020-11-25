@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit User Type</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/orders/{{$order->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s5">
                        <select name="quantity" id="quantity">
                            @foreach($quantities as $quantity)
                            <option value="{{ $quantity }}">{{ $quantity }}</option>
                            @endforeach
                        </select>
                        <label>Order Quantity</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <select id="user" name="user_id">
                            <option value="{{auth()->user()->id}}">{{auth()->user()->first_name}}
                                {{auth()->user()->last_name}}</option>
                        </select>
                        <label>User</label>
                    </div>
                    <div class="input-field col s4">
                        <select id="post" name="post_id">
                            @foreach ($posts as $post)
                            <option value="{{$post->id}}">Title: {{$post->title}}\ Quantity: {{$post->quantity}}
                            </option>
                            @endforeach
                        </select>
                        <label>Post</label>
                    </div>
                    <div class="input-field col s4">
                        <select id="payment" name="payment_id">
                            @foreach ($payments as $payment)
                            <option value="{{$payment->id}}">Payment Date: {{$payment->payment_date}} <--> Php
                                    {{$payment->payment_amount}}
                            </option>
                            @endforeach
                        </select>
                        <label>Payment</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection