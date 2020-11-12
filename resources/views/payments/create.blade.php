@extends('layouts.master')
@section('content')
	<div class="container">
		<h5>Create Payment</h5>
		<form method="POST" action="/payment">
			@csrf
		    <div class="form-group">
		    	
		    </div>
		    <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="" id="payment_amount" type="text" class="validate" name="payment_amount">
                        <label for="payment_amount">Payment Amount</label>
                    </div>
                </div>
		    <button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
	@endsection