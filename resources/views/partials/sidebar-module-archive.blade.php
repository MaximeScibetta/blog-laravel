@if(count($archives))
    <div class="sidebar-module">
        <h4>Archives</h4>
        <?php setLocale(LC_TIME, 'fr_FR') ;?>
        <ol class="list-unstyled">
            @foreach($archives as $archive)
                <li><a href="#">{{ucfirst($archive->formatLocalized('%B %Y'))}}</a></li>
            @endforeach
        </ol>
    </div>
@endif