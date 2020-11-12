@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Product Types</h5>
        <a href="/product-types/create">Create Product Type</a>
        <ol>
            @foreach ($productTypes as $productType)
            <li>
                <a target="_blank" href="/product-types/{{$productType->id}}">{{$productType->name}}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>
@endsection