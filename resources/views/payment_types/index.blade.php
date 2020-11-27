@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Payment Types</h5>
        <a href="/payment-types/create">Create Payment Type</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Payments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paymentTypes as $paymentType)
                <tr>
                    <td>{{$paymentType->name}}</td>
                    <td>{{$paymentType->description}}</td>
                    <td>
                        <a href="/payment-types/{{$paymentType->id}}">Show Payments</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection