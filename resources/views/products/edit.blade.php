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
				<input placeholder="Quantity" required id="quantity" type="number" class="validate" name="quantity"
					value="{{$product->quantity}}">
				<label>Quantity</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Image Url" id="image" type="text" class="validate" name="image"
					value="{{$product->image}}">
				<label for="product_name">Image URL</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<select id="posts" required name="post_id">
					<option value="" selected></option>
					@foreach ($posts as $post)
					<option value="{{$post->id}}">{{$post->title}}</option>
					@endforeach
				</select>
				<label>Post:</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<select id="product-types" name="product_type_id" value="{{$product->product_type_id}}">
					<option value="" selected></option>
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