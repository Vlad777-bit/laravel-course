<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Панель администратора @show</title>

    <link href="{{ asset('css/pure.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/side-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alert.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>

<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    @yield('menu')

    <div id="main">

        @yield('content')

    </div>
</div>

<script src="{{ asset('js/ui.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>

</body>

</html>
