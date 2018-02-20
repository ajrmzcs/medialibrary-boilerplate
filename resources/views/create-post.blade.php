@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 initial-top-margin">
                <div class="text-center">
                    <h1>Create new post</h1>
                </div>
                <p class="initial-top-margin">
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 initial-top-margin">
                <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="title">Body</label>
                        <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection