@extends('layouts.app')

@section('content')

    <div class="container">
        <span class="font-weight-bold">Title:</span>
        {{$post->title}}

        <span class="font-weight-bold">Content:</span>
        {{$post->content}}

        <span class="font-weight-bold">Slug:</span>
        {{$post->slug}}

        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Back</a>
    </div>

   
    
@endsection