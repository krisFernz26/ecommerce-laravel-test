@extends('layout.master')
@section('content')	
	<div class="container">
		<div class="section">
			<h5>Orders</h5>
			<a href="/orders/create"></a>
			<ol>
				@foreach ($orders as $order)
				<li>
					<a target="_blank" href="/posts/{{post->id}}">{{$post->name</a>
				</li>
				@endforeach
			</ol>
		</div>
	</div>
@endsection