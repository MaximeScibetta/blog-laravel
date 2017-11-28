<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
        <a class="nav-link active" href="/">Home</a>

        <a class="nav-link" href="#">New features</a>
        <a class="nav-link" href="#">Press</a>
        <a class="nav-link" href="#">About</a>
        @if(Auth::check())
            @can('store-post')
                <a class="nav-link" href="/store-post">Create Post</a>
            @endcan
            <a href="" class="nav-link">{{Auth::user()->name}}</a>
            <a href="/logout" class="nav-link">Logout</a>
        @else
            <a href="/login" class="nav-link">Login</a>
        @endif
        </nav>
    </div>
</div> 