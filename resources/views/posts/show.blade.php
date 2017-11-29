@extends('layouts.main')

@section('single-content')
        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$date}} by <a href="#">{{$post->user->name}}</a></p>
            <p>{{$post->body}}</p>
            <a href="/post/edit/{{$post->id}}">Edit</a>
        </div>
        @include('partials.comments')
        @include('partials.commentForm')
@endsection