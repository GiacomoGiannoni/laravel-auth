@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="mb-5 text-center">Edit post</h1>
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" max="255" value="{{old('title', $post->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="{{old('content', $post->content)}}"></textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection