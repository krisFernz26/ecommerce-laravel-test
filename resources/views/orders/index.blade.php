@extends('layouts.master')
@section('content')

<div class="container">
	<h5>All Orders</h5>
	<a href="/orders/create">Create a new order</a>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>BUYER EMAIL</th>
				<th>QUANTITY</th>
				<th>PAYMENT DATE</th>
				<th>ACTIONS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>
				<td> {{ $order->id }}</td>
				<td> {{ $order->user }}</td>
				<td> {{ $order->quantity }}</td>
				<td>{{$order->date_completed}}</td>
				<td> <a href="/orders/{{ $order->id }}">Display</a>
					|
					<a href="/orders/{{ $order->id }}/edit">Edit</a>
					|
					<a href="/orders/{{ $order->id }}/delete">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection