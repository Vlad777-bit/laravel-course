@extends('layouts/admin')

@section('title') Редактировать запись | @parent @endsection

@section('menu')
    <x-admin.sidebar/>
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
                enctype="multipart/form-data"
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

                <x-ui.input
                    name="title"
                    title="Наименование"
                    type="text"
                    value="{{ $news->title }}"
                />

                <x-ui.input
                    name="author"
                    title="Автор"
                    type="text"
                    value="{{ $news->author }}"
                />

                <x-ui.input
                    name="image"
                    title="Изображение"
                    type="file"
                    value=""
                />

                <x-ui.select
                    name="status"
                    title="Статус"
                >
                    <option @if($news->status === 'DRAFT') selected @endif>DRAFT</option>
                    <option @if($news->status === 'ACTIVE') selected @endif>ACTIVE</option>
                    <option @if($news->status === 'BLOCKED') selected @endif>BLOCKED</option>
                </x-ui.select>

                <x-ui.textarea
                    name="description"
                    title="Описание"
                >
                    {!! $news->description !!}
                </x-ui.textarea>

                <x-slot:button>
                    <x-ui.button
                        type="submit"
                        cssClass="btn-outline-primary"
                    >
                        Обновить
                    </x-ui.button>
                </x-slot:button>
            </x-ui.form>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>

    <script>

        ClassicEditor
            .create(document.querySelector('#description'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                        'link', '|',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'code', 'codeBlock', '|',
                        'insertTable', '|',
                        'ckfinder', 'blockQuote', '|',
                        'undo', 'redo'
                    ],
                    shouldNotGroupWhenFull: true
                },

                ckfinder: {
                    uploadUrl: 'https://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&responseType=json',

                    options: {
                        resourceType: 'Images'
                    }
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
