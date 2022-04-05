@extends('layouts/admin')

@section('title') Создать категорию | @parent @endsection

@section('menu')
    <x-admin.sidebar />
@endsection

@section('content')
    <div class="header">
        <h1>Создать категорию</h1>
    </div>

    <div class="content">
        <div>
            @include('inc.messages')

            <x-ui.form
                method="POST"
                route="{{ route('admin.categories.store') }}"
                custom-method=""
            >
                <x-ui.input
                    name="title"
                    title="Наименование"
                    type="text"
                    value=""
                />

                <x-ui.textarea
                    name="description"
                    title="Описание"
                />

                <x-slot:button>
                    <x-ui.button
                        type="submit"
                        cssClass="pure-input-1 pure-button-primary"
                    >
                        Создать категорию
                    </x-ui.button>
                </x-slot:button>
            </x-ui.form>
        </div>
    </div>
@endsection

