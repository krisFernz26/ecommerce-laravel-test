@extends('layouts.master')
@section('content')
 <div class="container">
 	<h5>Products Form </h5>
 	<form method=POST action="/products">
 		@csrf
	 	<div class="row">
	 		<div class="col s12">
	 			<div class="row">
			 		<div class="input-field col s12">
					 	<input placeholder="Placeholder" id="product_name" type="text" class="validate">
			            <label for="product_name">Product Name</label>
			 		</div>
		 		</div>
	 		</div>
	    </div>
			 		<div class="input-field col s12">
			 			<label>Quantity</label>
				 			<select>
				 				@foreach($quantities as $quantity)
				 				<option value="{{ $quantity }}">{{ $quantity }}</option>
				 				@endforeach
				 			</select>
			 		</div>

        <div class="input-field col s12 m6">
		    <select class="icons">
		    	@foreach($imagess as $images)
		      <option value="" disabled selected>Choose an image</option>
		      <option value="{{ $images }}" data-icon="{{ $images }}">{{ $images }}</option>
		      @endforeach
		    </select>
    			<label>Select an Image</label>
  		</div>

 		<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Submit</button>
 	</form>
  </div>
 @endsection 