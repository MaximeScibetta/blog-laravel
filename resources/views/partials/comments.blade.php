<div>
    <h2>All comments</h2>
    <ul>
        @foreach($post->comments as $comment)
        <li>
            <div>{{$comment->user->name}}</div>
            <div>{{$comment->content}}</div>
        </li>
        @endforeach
    </ul>
</div>