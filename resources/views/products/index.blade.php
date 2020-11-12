@extends('layouts.master')
@section('content')

 <div class="container">
 	<h5>All Products</h5>
 	<table class="table">
	 		<thead>
	 			<tr>
	 				<th>ID</th>
	 				<th>NAME</th>
	 				<th>QUANTITY</th>
	 				<th>IMAGE</th>
	 				<th>ACTIONS</th>
	 			</tr>
	 		</thead>
	 		<tbody>
	 			@foreach($products as $product)
	 			<tr>
	 				<td> {{ $products->id }}</td>
	 				<td> {{ $products->name }}</td>
	 				<td> {{ $products->quantity }}</td>
	 				<td> {{ $products->image }}</td>
	 				<td> <a href="/products/{{ $product->id }}">Display Product</a>
	 				|
	 					 <a href="/products/{{ $product->id }}/edit">Edit Product</a>
	 				|
	 					 <a href="/products/{{ $product->id }}/delete">Delete Product</a>
	 				</td>
	 			</tr> 
	 			@endforeach
	 		</tbody>
 	</table>
 </div>
 @endsection