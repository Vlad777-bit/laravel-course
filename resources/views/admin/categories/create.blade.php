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
                    value="{{ old('title') }}"
                />

                <x-ui.select
                    name="is_active"
                    title="Активировать?"
                >
                    <option
                        @if(old('is_active') === 'true') selected @endif
                    >
                        Да
                    </option>

                    <option
                        @if(old('is_active') === 'false') selected @endif
                    >
                        Нет
                    </option>
                </x-ui.select>

                <x-ui.textarea
                    name="description"
                    title="Описание"
                >
                    {{ old('description') }}
                </x-ui.textarea>

                <x-slot:button>
                    <x-ui.button
                        type="submit"
                        cssClass="btn-outline-primary"
                    >
                        Создать категорию
                    </x-ui.button>
                </x-slot:button>

            </x-ui.form>
        </div>
    </div>
@endsection

