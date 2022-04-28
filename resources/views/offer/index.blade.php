@extends('layouts/main')

@section('title') Предложение | @parent @endsection

@section('greeting')
    <x-main.greeting
        title="Предложите нам свою новость"
    />
@endsection

@section('content')
    <div class="container px-4 py-5 mt-5" id="featured-3">
        <h2>Предложите новость</h2>

        @include('inc.messages')

        <x-ui.form
            method="POST"
            route="{{ route('offer.store') }}"
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

            <x-ui.input
                name="userPhone"
                title="Телефон"
                type="tel"
                value=""
            />

            <br>

            <x-ui.input
                name="userEmail"
                title="Почта"
                type="email"
                value=""
            />

            <br>

            <x-ui.textarea
                name="description"
                title="О чём бы вы хотели написать?"
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
