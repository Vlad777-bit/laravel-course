@extends('layouts/main')

@section('title') Категории | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">Категории</h1>
        <h2 class="brand-tagline"></h2>
    </x-main.sidebar>
@endsection

@section('content')
        @foreach($categoryList as $category)
            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">
                        {{ $category }}
                    </h2>

                    <a href="{{ route('news', ['category' => $category]) }}" class="pure-button">Перейти</a>
                </header>

                <div class="post-description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </section>
        @endforeach
@endsection
