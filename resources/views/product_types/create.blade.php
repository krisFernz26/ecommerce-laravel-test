@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create Product Type</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/product-types" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="name" type="text" class="validate" name="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="description" type="text" class="validate" name="description">
                        <label for="description">Description</label>
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
    </div>
</div>
@endsection