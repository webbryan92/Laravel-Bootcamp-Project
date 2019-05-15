@extends('layout')

@section('title', 'New Blog Post')

@section('content')
    <form>
        <div class="form-group">
            <label for="title">Email address</label>
            <input type="text" class="form-control" id="title" placeholder="Blog Title">
        </div>
        <div class="form-group">
            <label for="category">Example select</label>
            <select class="form-control" id="category">
                <option>General</option>
                <option>Gunpla</option>
                <option>Games</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Type blogpost here</label>
            <textarea class="form-control" id="description" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="body">Type blogpost here</label>
            <textarea class="form-control" id="body" rows="4"></textarea>
        </div>
    </form>
@endsection