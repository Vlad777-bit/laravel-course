@extends('layouts/main')

@section('title') О сайте | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">О сайте</h1>
        <h2 class="brand-tagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem rem.
        </h2>
    </x-main.sidebar>
@endsection

@section('content')
    @foreach($commentsList as $comment)
        <div class="posts">
            <section class="post">
                <header class="post-header">
                    <img width="48" height="48" alt="{{ $comment->author }} avatar" class="post-avatar"
                         src="{{ $comment->image }}">

                    <p class="post-meta">
                        By <a href="#" class="post-author">{{ $comment->author }}</a>
                    </p>
                </header>

                <div class="post-description">
                    <p>
                        {{ $comment->comment }}
                    </p>
                </div>
            </section>
        </div>
    @endforeach


    <div>
        <h2 class="post-title">Оставьте отзыв о работе нашего сайта ;)</h2>
        <x-main.about.form />
    </div>
@endsection
