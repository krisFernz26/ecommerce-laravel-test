@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Payments Form</h5>
	<form method=POST action="/payments">
		@csrf
		<div class="row">
			<div class="col s12">
				<div class="row">
 					<div class="input-field col s12">
 						<input placeholder="placeholder" id="payment_type" type="text" class="validate">
 						<label for="product_name">Payment type</label>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="input-field col s12">
 			<label>Amount</label>
 			<select>
 				@foreach($amounts as $amount)
 				<option value="{{ $amount}}">{{$amount}}</option>
 				@endforeach
 			</select>
</div>
@endsection