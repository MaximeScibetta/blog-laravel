@extends('layouts.main')

@section('comment-content')
<form action="/comments" method="post">
    {{csrf_field()}}
    @if(Auth::check())
    <div class="form-group">
        <label for="comment-content">Your comment</label>
        <textarea name="content" id="comment-content" class="form-control">{{old('content')}}</textarea>
    </div>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="user_id" value="{{auth()->id()}}">
    <button type="submit" class="btn btn-primary">Submit</button>
    @else
        <div class="alert alert-danger">
            Vous devez être <a href="/login">inscrit</a> pour poster un commentaire
        </div>
    @endif
</form>
@include('partials.validation-errors')
@endsection
