{{-- RECUPERO LAYOUT BASE --}}
@extends('layouts.app')

{{-- CREO TITOLO --}}
@section('title', 'Movies administrator')

{{-- CREO CONTENUTO --}}
@section('main-content')
    <!-- MAIN HOME -->
    <section id="recipe-jumbotrom">
        <div>
            <div class="reicpe-series">current series</div>
        </div>
    </section>
    <!-- SEZIONE CONTENUTO  -->
    <section id="recipe-content">
        {{-- ALERT --}}
        @include('includes.alert')
        <!-- CONTENITORE FILM -->
        <div class="container-films">
            @foreach ($movies as $movie)
                <div class="recipe-films">
                    <a href="{{ route('movies.show', $movie->id) }}">
                        <img src="{{ $movie->thumb }}" alt="{{ $movie->title }}">
                        <div class="text-films"></div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="button-films">
            <a class="btn btn-primary text-decoration-none" href="{{ route('movies.create') }}">Aggiungi film</a>
            <a class="btn btn-secondary text-decoration-none" href="{{ route('movies.trash') }}">Vedi cestino</a>
        </div>
    </section>
    <!-- SEZIONE CONTENUTO MENU -->
    <section id="recipe-content-comics">
        @foreach ($main_menu as $menu)
            <div class="recipe-comics">
                <img src="{{ asset('images/' . $menu['image']) }}" alt="{{ $menu['text'] }}">
                <span>{{ $menu['text'] }}</span>
            </div>
        @endforeach
    </section>
@endsection