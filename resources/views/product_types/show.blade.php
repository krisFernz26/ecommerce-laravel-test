@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Product Type: {{ $productType -> name }}</span>
                        <h6 style="margin-left: 1em">Product Type ID:</h6>
                        <p style="margin-left: 2em">{{ $productType ->  id }}</p>
                        <h6 style="margin-left: 1em">Description:</h6>
                        <p style="margin-left: 2em">{{ $productType -> description }}</p>
                        <h6>Products:</h6>
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
                                @foreach ($productType->products as $product)
                                <tr>
                                    <td><a href="/products/{{$product->id}}">{{$product->name}}</a>
                                    </td>
                                    <td>{{$product->quantity}}</td>
                                    <td><img src="{{$product->image}}" alt="{{$product->name}}" width="100px"></td>
                                    <td><a href="/products/{{$product->id}}/edit">Edit</a> | <a
                                            href="/products/{{$product->id}}/delete">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action pink darken-3">
                        <a class="pink-text text-lighten-5" href="/product-types/{{$productType->id}}/edit">Edit</a>
                        <a class="pink-text text-lighten-5" href="/product-types/{{$productType->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection