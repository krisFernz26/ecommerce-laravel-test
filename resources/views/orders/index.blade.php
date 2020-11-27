@extends('layouts.master')
@section('content')

<div class="container">
	<h5>All Orders</h5>
	<a href="/orders/create">Create a new order</a>
	<table class="table">
		<thead>
			<tr>
				<th>BUYER EMAIL</th>
				<th>POST</th>
				<th>PAYMENT AMOUNT</th>
				<th>PAYMENT TYPE</th>
				<th>PAYMENT DATE</th>
				<th>ACTIONS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>
				<td><a href="/users/{{ $order->user->id }}">{{ $order->user->first_name }}
						{{ $order->user->last_name }}</a></td>
				<td><a href="/posts/{{ $order->post->id }}">{{ $order->post->title }}</a></td>
				@if ($order->payment != null)
				<td>
					<a href="/payments/{{$order->payment->id}}">Php {{$order->payment->payment_amount}}</a>
				</td>
				<td>{{$order->payment->payment_type->name}}</td>
				<td>{{$order->payment->created_at}}</td>
				@else
				<td></td>
				<td></td>
				<td></td>
				@endif

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