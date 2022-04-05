@extends('layouts/main')

@section('title') Предложение | @parent @endsection

@section('sidebar')
    <x-main.sidebar>
        <h1 class="brand-title">Предложите нам новость</h1>
        <h2 class="brand-tagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem rem.
        </h2>
    </x-main.sidebar>
@endsection

@section('content')
    <div>
        <h2 class="post-title">Предложите новость</h2>

        @include('inc.messages')

        <x-ui.form
            method="POST"
            route="{{ route('offer.store') }}"
            custom-method=""
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
                <div class="pure-button-right">
                    <x-ui.button
                        type="submit"
                        cssClass="pure-input-1-5 pure-button-form"
                    >
                        Отправить
                    </x-ui.button>
                </div>
            </x-slot:button>
        </x-ui.form>
    </div>
@endsection
