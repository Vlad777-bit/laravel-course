<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

<div>
    <h2>{{ $news['title'] }}</h2>
    <img src="{{ $news['img'] }}" alt="image">
    <br>
    <span>Status: <b>{{ $news['status'] }}</b></span>
    <br>
    <span>Автор: <i>{{ $news['author'] }}</i></span>
    <br>
    <p>{{ $news['body'] }}</p>
</div>

</body>

</html>
