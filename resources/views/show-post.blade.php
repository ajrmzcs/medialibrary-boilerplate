@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 initial-top-margin">
                <div class="text-center">
                    <h1>Show Post With Image</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 initial-top-margin">
                <h1>{{ $post->title }}</h1>
                <img src="{{ $post->getFirstMediaUrl() }}" class="img-fluid" alt="">
                <p class="initial-top-margin">
                    {{ $post->body }}
                </p>
                <p class="initial-top-margin">
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
                </p>
            </div>
        </div>
    </div>
@endsection