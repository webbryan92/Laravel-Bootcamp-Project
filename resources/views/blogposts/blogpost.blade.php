@extends('layout')

@section('title', 'TODO dynamic title' )

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{ $blogpost->title }}</h1>
                    <h2 class="subheading">{{ $blogpost->description }}</h2>
                    <span class="meta">Posted
                    on {{ $blogpost->created_at }}</span>
                </div>
                <br>
                <p>{{ $blogpost->body }}</p>
            </div>
        </div>
    </div>
@endsection