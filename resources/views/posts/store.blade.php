@extends('layouts.main')

@section('add-content')
    <form action="/store-post" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="post-title">Your post title :</label>
            <input type="text" id="post-title" name="title"><br>
            <label for="post-preamble">Your post preamble :</label>
            <textarea name="preamble" id="post-preamble" class="form-control"></textarea>
            <label for="post-content">Your post content :</label>
            <textarea name="body" id="post-content" class="form-control"></textarea>
        </div>
        <input type="hidden" name="user_id" value="1">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection