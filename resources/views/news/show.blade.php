@extends('layouts/main')

@section('title') {{ $news[0]->title }} | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">{{ $news[0]->title }}</h1>
    </x-main.sidebar>
@endsection

@section('content')
    <div>
        <div class="posts">
            @foreach($news as $n)
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">{{ $n->title }}</h2>

                        <x-main.news.post-meta
                            :author="$n->author"
                            :status="$n->status"
                        />

                    </header>

                    <div class="post-description">
                        <div class="post-images pure-g">
                            <div class="pure-u-1">
                                <a href="#">
                                    <img alt="Photo of someone working poolside at a resort"
                                         class="pure-img-responsive"
                                         src="{{ $n->image }}"
                                    >
                                </a>
                            </div>
                        </div>

                        <p>
                            {{ $n->description }}
                        </p>
                    </div>
                </section>
            @endforeach
        </div>

    </div>
@endsection
