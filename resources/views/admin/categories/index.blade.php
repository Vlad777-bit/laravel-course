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
@endsection
