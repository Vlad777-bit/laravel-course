@extends('layouts/main')

@section('title') {{ $news[0]->title }} | @parent @endsection

@section('greeting')
    @foreach($news as $n)

        <x-main.greeting
            title="{{ $n->title }}"
        >
            <p class="text-center">
                <span class="fw-light">Автор: {{ $n->author }}</span>
            </p>

            <p class="text-center">
                <span class="fw-light">Публиковано: {{ $n->created_at }}</span>
            </p>
        </x-main.greeting>
    @endforeach

@endsection

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            @foreach($news as $n)
                <img src="{{ $n->image }}" class="img-fluid" alt="{{ $n->title }}">
                <p class="text-start fs-2 fw-light">
                    {!! $n->description !!}
                </p>
            @endforeach
        </div>
    </div>
@endsection
