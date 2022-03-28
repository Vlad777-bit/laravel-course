<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') TrueNews @show</title>

    <link href="{{ asset('css/pure.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grids-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alert.css') }}" rel="stylesheet">
</head>

<body>

<div id="layout" class="pure-g">

    @yield('sidebar')

    <div class="content pure-u-1 pure-u-md-3-4">
        @yield('content')
    </div>
</div>

<script src="{{ asset('js/alert.js') }}"></script>
</body>

</html>

