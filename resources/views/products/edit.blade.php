@extends('layouts.master')
@section('content')
 <div class="container">
 	<h5>Edit Products Form </h5>
 	<form method=POST action="/products/ {{ $product->id }}">
 		@method('PUT');
 		@csrf
 		<div class="row">
	 		<div class="col s12">
	 			<div class="row">
			 		<div class="input-field col s12">
			 			<input placeholder="Placeholder" id="product_name" name="string" type="text" class="validate" value=" {{ $product->string }}">
			            <label for="product_name">Product Name</label>
			 		</div>
		 		</div>
	 		</div>
   		</div>
		 		<div class="input-field col s12">
		 			<label>Product_Quantity</label>
		 			<select>
		 				@foreach($quantities as $quantity)
			 				@if(quantity == $product->quantity)
			 				<option value="{{ $quantity }}" selected>{{ $quantity }}</option>
			 				@else
			 				<option value="{{ $quantity }}">{{ $quantity }}</option>
			 				@endif
		 				@endforeach
		 			</select>
		 		</div>

 		<div class="input-field col s12 m6">
		    <select class="icons">
		    	@foreach($imagess as $images)
		    		@if(images == $product->images)
					    <option value="" disabled selected>Choose an image</option>
					    <option value="{{ $images }}" data-icon="{{ $images }}" selected>{{ $images }}</option>
				    @else
			            <option value="{{ $images }}" data-icon="{{ $images }}">{{ $images }}</option>
			        @endif
		        @endforeach
		    </select>
    			<label>Select an Image</label>
  		</div>

 		<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Submit</button>
 	</form>
 </div>
 @endsection 