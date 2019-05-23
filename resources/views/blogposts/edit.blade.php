@extends('layout')

@section('title', 'Edit Blog Post')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
    @endif

    <h1>Edit Blog Post</h1>
    <br>

    <form method="post" action="/blogposts/{{ $blogpost->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blogpost->title}}" required>
        </div>
        <div class="form-group">
            <label for="description">Type a short description</label>
            <textarea class="form-control" id="description" name="description" rows="2" required>{{$blogpost->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="body">Type blogpost here</label>
            <textarea class="form-control" id="body" name="body" rows="4" required>{{$blogpost->body}}</textarea>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update Blog</button>
    </form>

    <form method="POST" action="/blogposts/{{ $blogpost->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button class="btn btn-danger" type="submit">Delete Blog</button>
            </div>
        </div>
    </form>

@endsection