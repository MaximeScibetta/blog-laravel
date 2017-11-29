<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" >
    <title>Laravel Blog</title>
</head>
<body>
    @include('layouts.header')
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                @yield('main-content')
                @yield('single-content')
                @yield('add-content')
                @yield('login-content')
            </div>
            @include('layouts.aside')
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>