@extends('layouts/admin')

@section('title') Список категорий | @parent @endsection

@section('menu')
    <x-admin.sidebar>
        <a href="{{ route('admin.categories.create') }}" class="pure-menu-link">
            Добавить категорию
        </a>
    </x-admin.sidebar>
@endsection

@section('content')
    <div class="header">
        <h1>Список категорий</h1>
    </div>

    <div class="content">
        <div>
            @include('inc.messages')

            <table class="pure-table pure-table-bordered">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Кол-во новостей</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Опции</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categoriesList as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->news_count }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a
                                href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"
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
                        <td colspan="4">Категорий пока нет</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        </div>
@endsection
