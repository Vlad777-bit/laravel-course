@extends('layouts/main')

@section('title') О сайте | @parent @endsection

@section('greeting')

@endsection

@section('content')
    <div class="container px-4 py-5 mt-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Отзывы</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach($commentsList as $comment)
                <div class="feature col">
                    <div style="width: 7em; height: 7em">
                        <img src="{{ $comment->image }}" class="rounded-circle w-100" alt="{{ $comment->author }}">
                    </div>
                    <h2>Featured title</h2>
                    <p>
                        {{ $comment->comment }}
                    </p>
                    <span>Автор:
                        <a href="#" class="icon-link">
                            {{ $comment->author }}
                        </a>
                    </span>

                </div>
            @endforeach
        </div>
        <h2>Оставьте отзыв о работе нашего сайта ;)</h2>

        <x-ui.form
            method="GET"
            route=""
            custom-method=""
            enctype=""
        >

            <x-ui.input
                name="userName"
                title="Имя"
                type="text"
                value=""
            />

            <br>

            <x-ui.textarea
                name="comment"
                title="Комментарий"
            />


            <x-slot:button>
                <x-ui.button
                    type="submit"
                    cssClass="btn-outline-primary"
                >
                    Отправить
                </x-ui.button>
            </x-slot:button>

        </x-ui.form>
    </div>
@endsection
