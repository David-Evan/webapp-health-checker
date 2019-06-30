<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- You can use this yield to add some css files  --}}
        @yield('css')

        <title>Webapp Health Checker</title>
    </head>
    <body>
        <div id="app">
            <task-list></task-list>

        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
