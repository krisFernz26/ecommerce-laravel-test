@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Edit Products Form </h5>
	<form method=POST action="/products/ {{ $product->id }}">
		@method('PUT')
		@csrf
		<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="input-field col s12">
						<input placeholder="Product Name" id="product_name" type="text" class="validate" name="name"
							value="{{$product->name}}">
						<label for="product_name">Product Name</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<label>Quantity</label>
				<select name="quantity" id="quantity" value="{{$product->quantity}}">
					@foreach($quantities as $quantity)
					<option value="{{ $quantity }}">{{ $quantity }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
				<div class="input-field col s12">
					<input placeholder="Image Url" id="image" type="text" class="validate" name="image"
						value="{{$product->image}}">
					<label for="product_name">Image URL</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<select id="product-types" name="product_type_id" value="{{$product->product_type_id}}">
					@foreach ($productTypes as $productType)
					<option value="{{$productType->id}}">{{$productType->name}}: {{$productType->description}}</option>
					@endforeach
				</select>
				<label>Product Type:</label>
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