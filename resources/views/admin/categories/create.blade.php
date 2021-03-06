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
                enctype=""
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
                        @if(old('is_active') === true) selected @endif
                        value="1"
                    >
                        Да
                    </option>

                    <option
                        @if(old('is_active') === false) selected @endif
                        value="0"
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
