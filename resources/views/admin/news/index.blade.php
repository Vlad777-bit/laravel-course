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

    <div class="content">


        @forelse($newsList as $news)
            <div class="posts">

                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">
                            <a href="#">
                                {{ $news->title }}
                            </a>
                        </h2>

                        <x-main.news.post-meta
                            :author="$news->author"
                            :status="$news->status"
                        />

                    </header>

                    <div class="post-description">
                        <div class="post-images pure-g">
                            <div class="pure-u-1">
                                <a href="#">
                                    <img alt="Photo of someone working poolside at a resort"
                                         class="pure-img-responsive"
                                         src="{{ $news->image }}"
                                    >
                                </a>
                            </div>
                        </div>
                        <p>
                            {{ $news->description }}
                        </p>

                        <div class="pure-button-right">
                            <a href="{{ route('admin.news.edit', ['news' => $news->id]) }}" class="pure-button">
                                Редактировать
                            </a>
                            <a href="#" class="pure-button pure-button-danger">
                                Удалить
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        @empty
            новостей пока нет
        @endforelse
    </div>
@endsection
