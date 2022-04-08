@extends('layouts/main')

@section('title') Главная | @parent @endsection

@section('greeting')
    <x-main.greeting
        title="TrueNews"
    >
        <p class="lead text-muted">
            Добро пожаловать на новостной сайт! Здесь Вы найдёте самые актуальные новости.
        </p>
    </x-main.greeting>
@endsection

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @forelse($lastNews as $news)

                    <div class="col">
                        <div class="card shadow-sm">
                            <img
                                src="{{ $news->image }}"
                                class="img-fluid"
                                style="height: 26vh"
                                alt="{{ $news->title}}"
                            />

                            <div class="card-body">
                                <p class="card-text">
                                    {{ $news->description }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a
                                            href="{{ route('news.show', [
                                                'id' => $news->id, 'category' => $news->category_id
                                            ]) }}"
                                            class="btn btn-sm btn-outline-secondary"
                                        >
                                            Посмотреть &raquo;
                                        </a>
                                    </div>
                                    <small class="text-muted">{{ $news->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty

                    <h2 class="mt-5">Новостей пока нет</h2>

                @endforelse

            </div>
        </div>
    </div>
@endsection
