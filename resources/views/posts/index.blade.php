@extends('layouts.main')

@section('main-content')
    @foreach($blogPosts as $post)
        <div class="blog-post">
            <a href="/post/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
            <p class="blog-post-meta">{{$date}} by <a href="#">{{$post->user->name}}</a></p>
            <p>{{$post->body}}</p>
        </div>
    @endforeach
    @include('partials.pagination')
@endsection