@extends('layouts/admin')

@section('title') Список новостей | @parent @endsection

@section('menu')
    <x-admin.sidebar>
        <a href="{{ route('admin.news.create') }}" class="pure-menu-link">
            Добавить новость
        </a>
    </x-admin.sidebar>
@endsection

@section('content')
    <div class="header">
        <h1>Список новостей</h1>
    </div>

    <div class="content">

        @include('inc.messages')

        <table class="pure-table pure-table-bordered">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Категория</th>
                <th>Заголовок</th>
                <th>Статус</th>
                <th>Описание</th>
                <th>Дата редактирование</th>
                <th>Опции</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->category->title }}</td>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->status }}</td>
                    <td>{{ $news->description }}</td>
                    <td>@if($news->updated_at) {{ $news->updated_at->format('d-m-Y H:i') }} @endif</td>
                    <td>
                        <a
                            href="{{ route('admin.news.edit', ['news' => $news->id]) }}"
                            class="pure-button"
                        >
                            Ред.
                        </a>
                        &nbsp;
                        <a href="#" class="pure-button pure-button-danger">Удл.</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Новостей пока нет</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
