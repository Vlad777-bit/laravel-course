@extends('layouts/admin')

@section('title') Список категорий | @parent @endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Список категорий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-outline-secondary">
                    Добавить категорию
                </a>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="table-responsive">
            @include('inc.messages')
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Кол-во новостей</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Активность</th>
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
                        <td>{{ $category->is_active ? 'активна' : 'неактивна' }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Ред.</a>
                            &nbsp;
                            <a href="javascript:;" style="color:red;">Удл.</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4">Записей нет</td></tr>
                @endforelse
                </tbody>
            </table>

            {{ $categoriesList->links() }}
        </div>
    </div>
@endsection
