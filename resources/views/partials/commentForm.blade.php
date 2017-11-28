<form action="/comments" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="comment-content">Your comment</label>
        <textarea name="content" id="comment-content" class="form-control"></textarea>
    </div>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="user_id" value="{{\Blog\User::all()->pluck('id')->random()}}">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>