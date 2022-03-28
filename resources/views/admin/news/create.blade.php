@extends('layouts/admin')

@section('title') Добавить новость | @parent @endsection

@section('menu')
    <x-admin.sidebar />
@endsection

@section('content')
    <div class="header">
        <h1>Добавить новость</h1>
    </div>

    <div class="content">
        <x-admin.news.form />
    </div>
@endsection
