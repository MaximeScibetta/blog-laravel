<nav class="blog-pagination">
        <a class="btn btn-outline-primary <?php if($blogPosts->currentPage() === 1): echo 'disabled btn-outline-secondary'; endif;?>" href="{{$blogPosts->previousPageUrl()}}">Older</a>
        <a class="btn btn-outline-primary <?php if(!$blogPosts->hasMorePages()): echo 'disabled btn-outline-secondary '; endif;?>" href="{{$blogPosts->nextPageUrl()}}">Newer</a>
</nav>