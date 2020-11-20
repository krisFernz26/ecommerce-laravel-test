@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5 class="center-align">Delete Post "{{$post->title}}"</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/posts/{{$post->id}}" method="POST">
                @method('DELETE')
                @csrf
                <div class="row">
                    <div class="input-field center-align">
                        <button class="btn waves-effect waves-light pink darken-4" type="submit" name="action">DELETE
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection