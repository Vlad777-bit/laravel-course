@extends('layouts/admin')

@section('title') Редактировать запись | @parent @endsection

@section('menu')
    <x-admin.sidebar />
@endsection

@section('content')
    <div class="header">
        <h1>Редактировать запись {{ $news->id }}</h1>
    </div>

    <div class="content">
        <div>
            @include('inc.messages')

            <x-ui.form
                method="POST"
                route="{{ route('admin.news.update', ['news' => $news]) }}"
                custom-method="PUT"
            >
                <x-ui.select
                    name="category_id"
                    title="Категория"
                >
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            @if($category->id === $news->category_id) selected @endif
                        >
                            {{ $category->title }}
                        </option>
                    @endforeach

                </x-ui.select>

                <br>
                <br>

                <x-ui.input
                    name="title"
                    title="Наименование"
                    type="text"
                    value="{{ $news->title }}"
                />

                <br>

                <x-ui.input
                    name="author"
                    title="Автор"
                    type="text"
                    value="{{ $news->author }}"
                />

                <br>

                <x-ui.input
                    name="image"
                    title="Изображение"
                    type="file"
                    value=""
                />

                <br>

                <x-ui.select
                    name="status"
                    title="Статус"
                >
                    <option @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
                    <option @if($news->status === 'ACTIVE') selected @endif>ACTIVE</option>
                    <option @if($news->status === 'BLOCKED') selected @endif>BLOCKED</option>
                </x-ui.select>

                <br>
                <br>

                <x-ui.textarea
                    name="description"
                    title="Описание"
                >
                    {!! $news->description !!}
                </x-ui.textarea>

                <x-slot:button>
                    <x-ui.button
                        type="submit"
                        cssClass="pure-input-1 pure-button-primary"
                    >
                        Обновить
                    </x-ui.button>
                </x-slot:button>
            </x-ui.form>
        </div>
    </div>
@endsection
