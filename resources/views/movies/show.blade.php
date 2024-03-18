{{-- RECUPERO LAYOUT BASE --}}
@extends('layouts.app')

{{-- CREO TITOLO --}}
@section('title', 'Selected Movies administrator')

{{-- CREO CONTENUTO --}}
@section('main-content')
    <!-- MAIN MOVIES -->
    <section id="recipe-jumbotro">
        <div class="recipe-movies"></div>
        <img class="image-movies" src="{{ $movie->thumb }}" alt="{{ $movie->title }}">
    </section>
    {{-- ALERT --}}
    @include('includes.alert')
    <!-- SEZIONE CONTENUTO MENU -->
    <section id="recipe-content-movies">
        <article class="article-movies">
            <h1 class="title-movies">{{ $movie->title }}</h1>
            <div class="movies-info">
                <div class="movies-price">
                    <div>U.S Price: {{ $movie->price }}</div>
                    <div>AVAILABLE</div>
                </div>
                <div>Check Availability</div>
            </div>
            <div>
                <p>{{ $movie->description }}</p>
            </div>
        </article>
        <figure>
            <h5 class="text-movies">ADVERTISEMENT</h5>
            <img class="path-movies" src="{{ $movie->thumb }}" alt="{{ $movie->title }}">
        </figure>
    </section>
    <!-- SEZIONE INFORMAZIONI FILM -->
    <section id="recipe-info-movies">
        <div class="container-movies">
            <div class="recipe-talent">
                <h3 class="title-info">Talent</h3>
                <div class="d-flex-movies">
                    <h6 class="title-action">Art by:</h6>
                    <div class="actors-movies text-blue">
                        {{ $movie->artists }}
                    </div>
                </div>
                <div class="d-flex-movies">
                    <h6 class="title-action">Written by:</h6>
                    <div class="actors-movies text-blue">
                        {{ $movie->writers }}
                    </div>
                </div>
            </div>
            <div class="recipe-specs">
                <h3 class="title-info">Specs</h3>
                <div class="d-flex-movies">
                    <h6 class="title-action">Series:</h6>
                    <div class="title-margin text-blue">{{ $movie->series }}</div>
                </div>
                <div class="d-flex-movies">
                    <h6 class="title-action">U.S Price:</h6>
                    <div class="title-margin">{{ $movie->price }}</div>
                </div>
                <div class="d-flex-movies">
                    <h6 class="title-action">On Sale Date:</h6>
                    <div class="title-margin">{{ $movie->sale_date }}</div>
                </div>
            </div>
        </div>
    </section>
    <div class="recipe-films d-flex justify-content-center align-items-center my-5 gap-3">
        <a class="text-white btn btn-warning text-decoration-none" href="{{ route('movies.edit', $movie->id) }}">
            Modifica 
        </a>
        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white btn btn-secondary text-uppercase">Cestino</button>
        </form>
    </div>
    <!-- SEZIONE CONTENUTO MENU -->
    <section id="recipe-content-link-movies">
        @foreach ($main_menu as $menu)
            <div class="recipe-comics">
                <img class="image-link-movies" src="{{ asset('images/' . $menu['image']) }}" alt="{{ $menu['text'] }}">
                <span>{{ $menu['text'] }}</span>
            </div>
        @endforeach
    </section>
@endsection