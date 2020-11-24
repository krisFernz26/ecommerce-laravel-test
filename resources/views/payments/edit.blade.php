@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Edit Payment Form</h5>
	<form method="POST" action="/payments/{{ $payment->id }}">
		@csrf
		@method('PUT')
		<div class="form-group">
			<div class="row">
				<div class="input-field col s12">
					<select id="payment-types" name="payment_type_id" value="{{$payment->payment_type_id}}">
						@foreach ($paymentTypes as $paymentType)
						<option value="{{$paymentType->id}}">{{$paymentType->name}}: {{$paymentType->description}}
						</option>
						@endforeach
					</select>
					<label>Payment Type:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="date" class="datepicker" name="payment_date" value="{{$payment->payment_date}}">
					<label for="payment_date">Payment Date</label>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="" id="payment_amount" type="number" class="validate" name="payment_amount"
							value="{{$payment->payment_amount}}">
						<label for="payment_amount">Payment Amount</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field">
					<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Update
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
	</form>
</div>
@endsection