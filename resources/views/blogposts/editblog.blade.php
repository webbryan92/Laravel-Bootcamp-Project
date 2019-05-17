@extends('layout')

@section('title', 'Edit Blog Post')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
    @endif

    <h1>Edit Blog Post</h1>
    <br>

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blogpost->title}}" placeholder="Blog Title" required>
        </div>
        <div class="form-group">
            <label for="description">Type a short description</label>
            <textarea class="form-control" id="description" name="description" value="{{$blogpost->description}}" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="body">Type blogpost here</label>
            <textarea class="form-control" id="body" name="body" value="{{$blogpost->body}}" rows="4" required></textarea>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
    </form>
@endsection