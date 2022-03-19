<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Новости</title>

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
<h1>Новостной сайт</h1>

<p>
    Добро пожаловать на новостной сайт! Здесь Вы найдёте самые актуальные новости.
</p>

<a href="{{ route('categories') }}">Просмотреть категории</a>

</body>

</html>
