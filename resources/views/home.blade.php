{{-- RECUPERO LAYOUT BASE --}}
@extends('layouts.app')

{{-- CREO TITOLO --}}
@section('title', 'Home')

{{-- CREO CONTENUTO --}}
@section('main-content')
    <!-- MAIN HOME -->
    <section id="recipe-jumbotrom">
        <div>
            <div class="reicpe-series">current series</div>
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