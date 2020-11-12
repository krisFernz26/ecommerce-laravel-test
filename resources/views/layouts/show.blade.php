@extends('layout.master')
@section('content')	
	<div class="container">
		<div class="section">
			<div class="s12">
				<div class="col s12">
					<div class="card pink darken-1">
						<div class="card-content white-text">
							<span class="card-title">{{$order -> title}}</span>
							<h6 style="margin-left: 1em">Description</h6>
							<p style="margin-left: 2em">{{ post -> description }}</p>
						</div>
						<div class="card-action pink darken-3">
							<a class="pink-text text-lighten-5" href="/orders/{{order->id}}/edit">Edit</a>	
							<a class="pink-text text-lighten-5" href="/orders/{{order->id}}/Delete">Edit</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection