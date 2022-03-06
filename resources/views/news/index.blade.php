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
<h1>{{$newsList[0]['category']}}</h1>

<button><a href="{{ route('categories') }}">Назад</a></button>

@foreach($newsList as $news)
    <div>
        <h2>
            <a href="{{ route('news.show', ['category' => $news['category'], 'id' => $news['id']]) }}">
                {{ $news['title'] }}
            </a>
        </h2>
        <img src="{{ $news['img'] }}" alt="image">
        <br>
        <span>Категория: <b>{{ $news['category'] }}</b></span>
        <br>
        <span>Status <b>{{ $news['status'] }}</b></span>
        <br>
        <span>Автор: <i>{{ $news['author'] }}</i></span>
        <br>
        <p>{{ $news['body'] }}</p>
    </div>
    <hr>
@endforeach
</body>

</html>
