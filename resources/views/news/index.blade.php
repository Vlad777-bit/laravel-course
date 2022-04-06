@extends('layouts/main')

@section('title') {{ $category[0]->title }} | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">{{ $category[0]->title }}</h1>
    </x-main.sidebar>
@endsection

@section('content')
    @forelse($newsList as $news)

        @php
            $route = route('news.show', ['id' => $news->id, 'category' => $news->category_id]);
        @endphp

        <div class="posts">

            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a href="{{ $route }}">
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
                            <a href="{{ $route }}">
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
                        <a href="{{ $route }}" class="pure-button">
                            Подробнее
                        </a>
                    </div>
                </div>
            </section>
        </div>
        @empty
        <h2 class="post-title">Новостей по этой категории нет</h2>
    @endforelse
@endsection
