 @extends('layouts.master')
@section('content')
	<div class="container">
		<h5>Edit Payment Form</h5>
		<form method="POST" action="/payments/{{ $payment->id }}">
			<div class="form-group">
				<label for ="exampleInputEmail1">Payment Type</label>
				<select class="custom-select" name='paymentTypeId'>
					@foreach($$payment_type_id as $payment_type_id)
						@if($payment_type_id == $payment->payment_type_id)
							<option value="{{ $payment_type_id }}" selected>{{ $payment_type_id}}</option>
						@endif
						@else
							<option value="{{ $payment_type_id }}">{{ $payment_type_id}}</option>
						@endif
						
					@endforeach
				 </select>
		    </div>
		
		    <div class="form-group">
		    	<label for="exampleInputPassword1">Payment Amount</label>
		    	<input type="text" class="form-control" id="exampleInputPassword1" name="payment_amount" value="{{ $payment->payment_amount }}">
		    </div>

		    <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	@endsection