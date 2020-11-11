@extends('layouts.master')
@section('content')
	<div class="container">
		<h5>Create Payment Form</h5>
		<form method="POST" action="/payment">
			@csrf
			<div class="form-group">
				<label for ="exampleInputEmail1">Payment Type</label>
				<select class="custom-select" name='payment_type_id'>
					@foreach ($payment_type_id as $payment_type_id)
						<option value="{{ $payment_type_id }}">{{ $payment_type_id}}</option>
					@endforeach
				 </select>
		    </div>
		
		    <div class="form-group">
		    	<label for="exampleInputPassword1">Payment Amount</label>
		    	<input type="text" class="form-control" id="exampleInputPassword1" name="paymentAmount">
		    </div>

		    <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	@endsection