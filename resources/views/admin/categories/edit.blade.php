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
                enctype=""
            >

                <x-ui.input
                    name="title"
                    title="Наименование"
                    type="text"
                    :value="$category->title"
                />

                <x-ui.select
                    name="is_active"
                    title="Активировать?"
                >
                    <option
                        @if($category->is_active === true) selected @endif
                        value="1"
                    >
                        Да
                    </option>

                    <option
                        @if($category->is_active === false) selected @endif
                        value="0"
                    >
                        Нет
                    </option>
                </x-ui.select>

                <x-ui.textarea
                    name="description"
                    title="Описание"
                >
                    {!! $category->description !!}
                </x-ui.textarea>

                <x-slot:button>
                    <x-ui.button
                        type="submit"
                        cssClass="btn-outline-primary"
                    >
                        Сохранить
                    </x-ui.button>
                </x-slot:button>
            </x-ui.form>

        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

