@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <div>
            <h1 class="mb-3">{{$post->title}}</h1>
        </div>

        <h4>
            <span class="font-weight-bold mb-3">Content:</span>
            {{$post->content}}
        </h4>

        <div>
            <span class="font-weight-bold mb-3">Slug:</span>
            {{$post->slug}}
        </div>

        <a href="{{route('admin.posts.index')}}" class="btn btn-primary mb-3">Back</a>
    </div>

   
    
@endsection