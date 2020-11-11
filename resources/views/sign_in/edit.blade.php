@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Edit Payments Form</h5>
	<form method=POST action="/payments/ {{ $payments->id}}">
		@method('PUT');
		@csrf
		<div class="row">
			<div class="col s12">
				<div class="row">
 					<div class="input-field col s12">
 						<input placeholder="placeholder" id="payment_type" type="text" class="validate">
 						<label for="product_name">Payment Type</label>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="input-field col s12">
 			<label>Payment_Amount</label>
 			<select>
 				@foreach($amounts as $amount)
 				@is(amount == $payment->amount)
 				<option value="{{ $amount}}" selceted>{{$amount}}</option>
 				@else
 				<option value="{{ $amount}}">{{$amount}}</option>
 				@endif
 				@endforeach
 			</select>
</div>
@endsection