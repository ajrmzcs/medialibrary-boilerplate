@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 initial-top-margin">
                <div class="text-center">
                    <h1>Media Library Example</h1>
                </div>
                <p class="initial-top-margin">
                    <a href="{{ route('post.create') }}" class="btn btn-primary">New Post</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 initial-top-margin">
                <table class="table table-striped">
                    <tr>
                        <th class="text-center">Title</th>
                        <th class="text-center">Excerpt</th>
                        <th class="text-center">Created</th>
                        <th class="text-center">thumbnail</th>
                        <th colspan="2" class="text-center">Actions</th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td class="text-center align-middle"><a href="{{ route('post.show',['post' => $post->id]) }}">{{ $post->title }}</a></td>
                            <td class="text-center align-middle">{{ $post->excerpt() }}</td>
                            <td class="text-center align-middle">{{ $post->created_at->format('m-d-Y') }}</td>
                            <td class="text-center align-middle"><img src="{{ $post->getFirstMediaUrl('','thumb') }}" alt=""></td>
                            <td class="text-center align-middle">
                                <a href="user/{{ $post->id }}/edit" class="btn btn-sm btn-primary pull-right" title="Edit"><span class="fa fa-edit"></span></a>
                            </td>
                            <td class="text-center align-middle">
                                <form action="user/{{ $post->id }}" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-sm btn-danger pull-right" type="submit"><span class="far fa-trash-alt"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection