@extends('layout')

@section('title', 'New Blog Post')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
    @endif

    <h1>Create a New Blog Post</h1>
    <br>

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category" required>
                <option value="">Choose...</option>
                <option>General</option>
                <option>Gunpla</option>
                <option>Games</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Type a short description</label>
            <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="body">Type blogpost here</label>
            <textarea class="form-control" id="body" name="body" rows="4" required></textarea>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

        <br>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <p class="font-weight-bold">Error(s):</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection