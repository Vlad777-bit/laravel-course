@extends('layouts/main')

@section('title') {{ $news->title }} | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">{{ $news->title }}</h1>
    </x-main.sidebar>
@endsection

@section('content')
    <div>
        <div class="posts">
            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">{{ $news->title }}</h2>

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
                </div>
            </section>
        </div>

    </div>
@endsection
