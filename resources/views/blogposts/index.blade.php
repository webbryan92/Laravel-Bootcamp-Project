@extends('layout')

@section('title', 'Plexus Contacts Index')

@section('content')
    @foreach ($blogposts as $blogpost)
        <div class="card" style="width: 18rem; display: inline-block;">
            <div class="card-body">
                <h5 class="card-title">{{ $blogpost->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $blogpost->description }}</h6>
                <p class="card-text">{{ $blogpost->body }}</p>
                <p class="card-text text-muted">{{ $blogpost->created_at }}</p>
                <a href="{{ route('blogposts.blogpost', $blogpost) }}" class="card-link">Full Blog</a>
            </div>
        </div>
    @endforeach
@endsection