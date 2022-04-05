@extends('layouts/main')

@section('title') Категории | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">Категории</h1>
        <h2 class="brand-tagline"></h2>
    </x-main.sidebar>
@endsection

@section('content')
        @forelse($categoriesList as $category)
            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        {{ $category->title }}
                    </h2>

                    <a href="{{ route('news', ['category' => $category->id]) }}" class="pure-button">Перейти</a>
                </header>

                <div class="post-description">
                    <p>
                        {{ $category->description }}
                    </p>
                </div>
            </section>
        @empty
            <h2 class="post-header">Категорий пока нет</h2>
        @endforelse
@endsection
