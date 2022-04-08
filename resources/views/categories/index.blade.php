@extends('layouts/main')

@section('title') Категории | @parent @endsection

@section('greeting')
    <x-main.greeting
        title="Категории"
    />
@endsection

@section('content')
    <div class="container marketing">
        <div class="row">
            @forelse($categoriesList as $category)
                    <div class="col-lg-4">
                        <h2>{{ $category->title }}</h2>
                        <p>{{ $category->description }}</p>
                        <p>
                            <a
                                class="btn btn-secondary"
                                href="{{ route('news', ['category' => $category->id]) }}"
                            >
                                Перейти &raquo;
                            </a>
                        </p>
                    </div>
            @empty
                <h2 class="mt-5">Категорий пока нет</h2>
            @endforelse
        </div>

    </div>
@endsection


