@extends('layouts.master')
@section('content')
<div class="container">
	<div class="section">
		<div class="row">
			<div class="row">
				<div class="col s12">
					<div class="card">
						<div class="card-image">
							<img src="{{ $product->image }}" />
							<span class="card-title">{{ $product->name}}</span>
						</div>
						<div class="card-content">
							<h6>Product Name</h6>
							<p>{{ $product->name }}</p>
							<h6>Posted On</h6>
							<p><a href="/posts/{{ $product->post->id }}">{{ $product->post->title }}</a></p>
							<h6>Product Type</h6>
							<p>{{ $product->product_type->name }}</p>
							<h6>Quantity:</h6>
							<p>{{ $product->quantity }}</p>
						</div>
						<div class="card-action">
							<a href="/products/{{$product->id}}/edit">EDIT</a>
						</div>
						<div class="card-action">
							<a href="/products/{{$product->id}}/delete">DELETE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection