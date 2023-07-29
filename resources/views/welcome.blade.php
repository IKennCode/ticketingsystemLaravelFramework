<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Alvin Castor" >
        <title>One</title>
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <h1>Welcome Page</h1>
        <a href="/test">To test</a>
        <a href="/hello">To Hello</a>
        <div class="card">
            <div class="card-header">
                Card Footer
            </div>
            <div class="card-body">Card Body</div>
            <div class="card-footer">Card Footer</div>
        </div>
    </body>
</html>
