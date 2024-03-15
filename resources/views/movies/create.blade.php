@extends('layouts.app')

@section('title', 'Create Movie administration')

@section('main-content')
<div class="card m-5">
    <h3 class="text-center m-3">AMMINISTRATORE</h3>
    <form action="{{ route('movies.store') }}" method="POST">
        @include('includes.movies.form')
            <div class="col-6">
                <div class="d-flex justify-content-start align-items-center">
                    <a class="btn btn-info" href="{{ route('movies.index') }}">Torna Indietro</a>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-success">Salva Film</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
