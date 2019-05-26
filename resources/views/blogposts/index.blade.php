@extends('layout')

@section('title', 'All Blogposts')

@section('content')
    @foreach ($featured as $feature)
        <div class="card" style="width: 18rem; display: inline-block;">
            <div class="card-body">
                <h6 class="card-subtitle text-muted float-right">{{ $feature->category }}</h6>
                <h5 class="card-title">{{ $feature->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $feature->description }}</h6>
                <p class="card-text">{{ Str::limit($feature->body, 50) }}</p>
                <p class="card-text text-muted">{{ $feature->created_at }}</p>
                <a href="{{ route('blogposts.blogpost', $feature) }}" class="card-link">Full Blog</a>
            </div>
        </div>
    @endforeach

    <hr>

    @foreach ($blogposts as $blogpost)
        <div class="card" style="width: 18rem; display: inline-block;">
            <div class="card-body">
                <h6 class="card-subtitle text-muted float-right">{{ $blogpost->category }}</h6>
                <h5 class="card-title">{{ $blogpost->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $blogpost->description }}</h6>
                <p class="card-text">{{ Str::limit($blogpost->body, 50) }}</p>
                <p class="card-text text-muted">{{ $blogpost->created_at }}</p>
                <a href="{{ route('blogposts.blogpost', $blogpost) }}" class="card-link">Full Blog</a>
            </div>
        </div>
    @endforeach
@endsection