@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Product Types</h5>
        <a href="/product-types/create">Create Product Type</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Products</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productTypes as $productType)
                <tr>
                    <td>{{$productType->name}}</td>
                    <td>
                        <a href="/product-types/{{$productType->id}}">Show Products</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection