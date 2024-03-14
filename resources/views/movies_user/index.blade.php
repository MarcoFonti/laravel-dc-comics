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
                    <a href="{{ route('movies.show', $movie) }}">
                        <img src="{{ $movie->thumb }}" alt="">
                        <div class="text-films"></div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="button-films">load more</button>
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