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
        @if(isset($success_response))
            <x-alert type="success" message="Мы посмотрим ваше предложение!" icon="fa-check"/>
        @endif
        <x-main.offer.form />
    </div>
@endsection

