@extends('layouts.master')
@section('content')	
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Building</th>
					<th>Room Number</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $order)
				<tr>
					<td>{{ $room->id }}</td>
					<td>{{ $room->building }}</td>
					<td>{{ $room->number }}</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection