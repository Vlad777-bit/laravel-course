@extends('layouts/main')

@section('title') {{$newsList[0]['category']}} | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">{{$newsList[0]['category']}}</h1>
        <h2 class="brand-tagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem rem.
        </h2>
    </x-main.sidebar>
@endsection

@section('content')
    @foreach($newsList as $news)

        @php
            $route = route('news.show', ['category' => $news['category'], 'id' => $news['id']]);
        @endphp

        <div class="posts">

            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        <a href="{{ $route }}">
                            {{ $news['title'] }}
                        </a>
                    </h2>

                    <x-main.post-meta
                        :author="$news['author']"
                        :status="$news['status']"
                    />

                </header>

                <div class="post-description">
                    <div class="post-images pure-g">
                        <div class="pure-u-1">
                            <a href="{{ $route }}">
                                <img alt="Photo of someone working poolside at a resort"
                                     class="pure-img-responsive"
                                     src="{{ $news['img'] }}"
                                >
                            </a>
                        </div>
                    </div>
                    <p>
                        {{ $news['description'] }}
                    </p>

                    <div class="pure-button-right">
                        <a href="{{ $route }}" class="pure-button">
                            Подробнее
                        </a>
                    </div>
                </div>
            </section>
        </div>
    @endforeach
@endsection
