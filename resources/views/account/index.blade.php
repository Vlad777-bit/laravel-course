@extends('layouts.main')

@section('title') Личный кабинет | @parent @endsection

@section('greeting')
    <x-main.greeting
        title="Добро пожаловать, {{ Auth::user()->name }}"
    />
@endsection

@section('content')
    <div class="container marketing">
        <div class="row">
            @if(Auth::user()->is_admin)
                <a href="{{ route('admin.index') }}">Перейти в панель администратора</a>
            @endif

            @if(Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}" class="w-25" alt="{{ Auth::user()->name }}">
            @endif
        </div>
    </div>
@endsection
