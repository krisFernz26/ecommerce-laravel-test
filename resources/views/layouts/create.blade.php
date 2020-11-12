@extends('layouts.master')
@section('content')	
	<div class="container">
		<div class="section">
			<h5>Create Post</h5>
			<div class="row"></div>
			<div class="row">
				<form class="col s12" action="/user-types" method="ORDER>
			@csrf
			<div class="row">
				<div class="input-field cos s12">
					<input placeholder="Placeholder" id="title" type="text"	class="validate" name="title">
					<label for="title">Title</label>
				</div>
				<div class="input-field cos s12">
					<input id="Description" type="text"	class="validate" name="Description">
					<label for="Description">Description</label>
				</div>
				<div class="row">
					<div class="input-field"> 
						<button class="btn waves-effect waves-light pink darken-3" type="3" type="submit" name="action">Create <i class="material-icons right">send</i>
						</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>		
@endsection