@extends('layouts.main')

@section('main-content')
    <h2>Edit the post</h2>
    <form action="/post/edit/{{$post->id}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="post-title">Your post title :</label>
        <input type="text" id="post-title" name="title" value="{{$post->title}}"><br>
        <label for="post-preamble">Your post preamble :</label>
        <textarea name="preamble" id="post-preamble" class="form-control">{{$post->preamble}}</textarea>
        <label for="post-content">Your post content :</label>
        <textarea name="body" id="post-content" class="form-control">{{$post->body}}</textarea>
    </div>
    <input type="hidden" name="user_id" value="{{auth()->id()}}">
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection