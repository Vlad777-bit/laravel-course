@extends('layouts/main')

@section('title') Главная | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">TrueNews</h1>
        <h2 class="brand-tagline">Добро пожаловать на новостной сайт! Здесь Вы найдёте самые актуальные новости.</h2>
    </x-main.sidebar>
@endsection

@section('content')
    <div>
        <div class="posts">
            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">{{ $news['title'] }}</h2>

                    <x-main.post-meta
                        :author="$news['author']"
                        :status="$news['status']"
                    />

                </header>

                <div class="post-description">
                    <div class="post-images pure-g">
                        <div class="pure-u-1">
                            <a href="#">
                                <img alt="Photo of someone working poolside at a resort"
                                     class="pure-img-responsive"
                                     src="{{ $news['img'] }}"
                                >
                            </a>
                        </div>
                    </div>

                    <p>
                        {{ $news['body'] }}
                    </p>

                    <div class="post-images pure-g">
                        <div class="pure-u-1">
                            <a href="#">
                                <img alt="Photo of someone working poolside at a resort"
                                     class="pure-img-responsive"
                                     src="{{ $news['img'] }}"
                                >
                            </a>
                        </div>
                    </div>

                    <p>
                        {{ $news['body'] }}
                    </p>

                </div>
            </section>
        </div>

        <x-main.footer />

    </div>
@endsection
