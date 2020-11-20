@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Create Payment</h5>
	<form method="POST" action="/payments">
		@csrf
		<div class="form-group">
			<div class="row">
				<div class="input-field col s12">
					<select id="payment-types" name="payment_type_id">
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
					<input type="date" class="datepicker" name="payment_date">
					<label for="payment_date">Payment Date</label>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="" id="payment_amount" type="number" class="validate" name="payment_amount">
						<label for="payment_amount">Payment Amount</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="input-field">
					<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Create
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection