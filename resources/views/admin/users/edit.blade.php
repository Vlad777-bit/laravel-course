@extends('layouts/admin')

@section('title') Редактировать пользователя | @parent @endsection

@section('menu')
    <x-admin.sidebar/>
@endsection

@section('content')
    <div class="header">
        <h1>Редактировать пользователя {{ $user->name }}</h1>
    </div>

    <div class="content">
        <div>
            @include('inc.messages')

            <x-ui.form
                method="POST"
                route="{{ route('admin.users.update', ['user' => $user]) }}"
                custom-method="PUT"
            >
                <x-ui.select
                    name="is_admin"
                    title="Статус"
                >
                    <option
                        value="1"
                        @if($user->is_admin === true) selected @endif
                    >
                        Администратор
                    </option>
                    <option
                        value="0"
                        @if($user->is_admin === false) selected @endif
                    >
                        Пользователь
                    </option>

                </x-ui.select>Статус

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
