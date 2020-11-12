@extends('layouts.master')
@section('content')
<div class="container">
	<div class="section">
		<h5>Payments</h5>
		<a href="/payments/create">Create payments</a>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Payment Type</th>
					<th>Payment Date</th>
					<th>Payment Amount</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($payments as $payment)
				<tr>
					<td>{{ $payment->id }}</td>
					<td>{{ $payment->payment_type_id }}</td>
					<td>{{ $payment->payment_date }}</td>
					<td>{{ $payment->payment_amount }}</td>
					<td>
						<a href="/payments/{{ $payment->id }}/">Show</a>
						|
						<a href="/payments/{{ $payment->id }}/edit">Edit</a>

					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection