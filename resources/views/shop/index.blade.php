@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Shop</h5>
        {{-- @foreach ($posts as $post)
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/sample-1.jpg" alt="card-image">
                            <span class="card-title">{{ $post.title }}</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                    class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>{{ $post.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach --}}
    </div>
</div>
@endsection