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
        <!-- A wrapper for all the blog posts -->
        <div class="posts">
            <h1 class="content-subhead">Закреплённая новость</h1>

            <!-- A single blog post -->
            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">Welcome to Pure</h2>

                    <p class="post-meta">
                        Автор <a href="#" class="post-author">Tilo Mitra</a> under <a
                            class="post-category post-category-active" href="#">CSS</a>
                        <a class="post-category post-category-draft" href="#">Pure</a>
                    </p>
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
        </div>

        <div class="posts">
            <h1 class="content-subhead">Недавно добавленные</h1>

            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">Everything You Need to Know About Node.js</h2>

                    <p class="post-meta">
                        By <a class="post-author" href="#">Eric Ferraiuolo</a> under <a
                            class="post-category post-category-block" href="#">JavaScript</a>
                    </p>
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

            <section class="post">
                <header class="post-header">
                    <h2 class="post-title">Photos from CSSConf and JSConf</h2>

                    <p class="post-meta">
                        By <a class="post-author" href="#">Reid Burke</a> under <a class="post-category" href="#">Uncategorized</a>
                    </p>
                </header>

                <div class="post-description">
                    <div class="post-images pure-g">
                        <div class="pure-u-1 pure-u-md-1-2">
                            <a href="http://www.flickr.com/photos/uberlife/8915936174/">
                                <img alt="Photo of someone working poolside at a resort"
                                     class="pure-img-responsive"
                                     src="http://farm8.staticflickr.com/7448/8915936174_8d54ec76c6.jpg"
                                >
                            </a>

                            <div class="post-image-meta">
                                <h3>CSSConf Photos</h3>
                            </div>
                        </div>

                        <div class="pure-u-1 pure-u-md-1-2">
                            <a href="http://www.flickr.com/photos/uberlife/8907351301/">
                                <img alt="Photo of the sunset on the beach"
                                     class="pure-img-responsive"
                                     src="http://farm8.staticflickr.com/7382/8907351301_bd7460cffb.jpg"
                                >
                            </a>

                            <div class="post-image-meta">
                                <h3>JSConf Photos</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <x-main.footer />

    </div>
@endsection
