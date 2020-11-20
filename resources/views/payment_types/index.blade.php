@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Payment Types</h5>
        <a href="/payment-types/create">Create Payment Type</a>
        <ol>
            @foreach ($paymentTypes as $paymentType)
            <li>
                <a target="_blank" href="/payment-types/{{$paymentType->id}}">{{$paymentType->name}}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection