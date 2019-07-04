<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- You can use this yield to add some css files  --}}
    @yield('css')

    <title>WHC - @yield('title')</title>
</head>
<body>
<div id="app">


    <!-- HEADER - Contient la partie "nav-bar"-->
@include('includes.header')


<!-- CONTAINER - Contient la structure commune des pages -->
    <div class="container-fluid mt-4">
        @yield('main')
    </div>


    @include('includes.footer')

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>