@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit Payment Type</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/payment-types/{{$paymentType->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="name" type="text" class="validate" name="name"
                            value="{{$paymentType->name}}">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="description" type="text" class="validate" name="description"
                            value="{{$paymentType->description}}">
                        <label for="description">Description</label>
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
    </div>
</div>
@endsection