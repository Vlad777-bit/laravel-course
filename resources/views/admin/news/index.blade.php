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
@endsection
