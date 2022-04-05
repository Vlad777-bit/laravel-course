@extends('layouts/admin')

@section('title') Редактировать категорию | @parent @endsection

@section('menu')
    <x-admin.sidebar />
@endsection

@section('content')
    <div class="header">
        <h1>Редактировать категорию</h1>
    </div>

    <div class="content">
        <div>
            @include('inc.messages')

            <x-ui.form
                method="POST"
                route="{{ route('admin.categories.update', ['category' => $category->id]) }}"
                custom-method="PUT"
            >

                <x-ui.input
                    name="title"
                    title="Наименование"
                    type="text"
                    :value="$category->title"
                />

                <x-ui.textarea
                    name="description"
                    title="Описание"
                >
                    {!! $category->description !!}
                </x-ui.textarea>

                <x-slot:button>
                    <x-ui.button
                        type="submit"
                        cssClass="pure-input-1 pure-button-primary"
                    >
                        Сохранить
                    </x-ui.button>
                </x-slot:button>
            </x-ui.form>

        </div>
    </div>
    @endsection

