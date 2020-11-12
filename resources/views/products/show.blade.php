@extends('layouts.master')
@section('content')
 <div class="container">
    <div class="section">
        <div class="row">
        	<div class="row">
			    <div class="col s12 m7">
					    <div class="card">
								<div class="card-image">
									<img src="{{ $products->images }}">
									<span class="card-title">{{ products->name}}</span>
									</div>
										<div class="card-content">
												<h6>Product ID</h6>>
												<p>{{ products->id }}</p>
											    <h6>Quantity:</h6>
						                        <p>{{ $products->quantity }}</p>
								          		<p></p>
								        </div>
						        	<div class="card-action">
						          <a href="#">MORE INFO</a>
						        </div>
					    </div>
			    </div>
 			 </div>
        </div>
    </div>
</div>                    
 @endsection