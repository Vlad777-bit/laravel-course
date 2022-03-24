<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') TrueNews @show</title>

    <link href="{{ asset('css/pure.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grids-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>

<body>

<div id="layout" class="pure-g">

    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">TrueNews</h1>
            <h2 class="brand-tagline">Добро пожаловать на новостной сайт! Здесь Вы найдёте самые актуальные новости.</h2>

            <x-main.nav/>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        @yield('content')
    </div>
</div>


</body>

</html>
