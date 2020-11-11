@extends('layouts.master')
@section('content')
<div class="container">
    <div class="section">
    	<div class="row">
    		<div class="row">
    			<div class = "col s2 m7">
    				<div class="card">
    				</div>
    				<div class="card-content">
    					<h6> Payment ID: </h6>
    					<p> {{payments->id}}</p>
    					<h6> Amount: </h6>
    					<p> {{ $payments-> amount}}</p>
    					<p></p>
    				</div>
    				<div class="card-action">
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection