@extends('layouts/admin')

@section('title') Создать категорию | @parent @endsection

@section('menu')
    <x-admin.sidebar />
@endsection

@section('content')
    <div class="header">
        <h1>Создать категорию</h1>
    </div>

    <div class="content">
        <x-admin.category.form />
    </div>
@endsection

