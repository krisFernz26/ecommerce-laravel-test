@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Payment Type: {{ $paymentType -> name }}</span>
                        <h6>Payment Type ID:</h6>
                        <p>{{ $paymentType ->  id }}</p>
                        <h6>Description:</h6>
                        <p>{{ $paymentType -> description }}</p>
                        <h6>Payments:</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentType->payments as $payment)
                                <tr>
                                    <td><a href="/payments/{{$payment->id}}">{{$payment->name}}</a>
                                    </td>
                                    <td>{{$payment->quantity}}</td>
                                    <td><img src="{{$payment->image}}" alt="{{$payment->name}}" width="100px"></td>
                                    <td><a href="/payments/{{$payment->id}}/edit">Edit</a> | <a
                                            href="/payments/{{$payment->id}}/delete">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/payment-types/{{$paymentType->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/payment-types/{{$paymentType->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection