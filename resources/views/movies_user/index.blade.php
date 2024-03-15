{{-- RECUPERO LAYOUT BASE --}}
@extends('layouts.app')

{{-- CREO TITOLO --}}
@section('title', 'Movies')

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
        <!-- CONTENITORE FILM -->
        <div class="container-films">
            @foreach ($movies as $movie)
                <div class="recipe-films">
                    <a href="{{ route('movies_user.show', $movie->id) }}">
                        <img src="{{ $movie->thumb }}" alt="">
                        <div class="text-films"></div>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="button-films text-decoration-none" href="{{ route('movies_user.create') }}">Aggiungi film</a>
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