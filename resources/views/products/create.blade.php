@extends('layouts.master')
@section('content')
<div class="container">
	<h5>Products Form </h5>
	<form method=POST action="/products">
		@csrf
		<div class="row">
			<div class="input-field col s6">
				<input placeholder="Product Name" id="product_name" type="text" class="validate" name="name">
				<label for="product_name">Product Name</label>
			</div>
			<div class="input-field col s6">
				<select name="quantity" id="quantity">
					@foreach($quantities as $quantity)
					<option value="{{ $quantity }}">{{ $quantity }}</option>
					@endforeach
				</select>
				<label>Quantity</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Image Url" id="image" type="text" class="validate" name="image">
				<label for="product_name">Image URL</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<select id="product-types" name="product_type_id">
					@foreach ($productTypes as $productType)
					<option value="{{$productType->id}}">{{$productType->name}}: {{$productType->description}}</option>
					@endforeach
				</select>
				<label>Product Type:</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<button class="btn waves-effect waves-light pink darken-3" type="submit" name="action">Create
					<i class="material-icons right">send</i>
				</button>
			</div>
		</div>
	</form>
</div>
@endsection