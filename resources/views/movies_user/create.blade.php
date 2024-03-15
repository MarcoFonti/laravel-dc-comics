@extends('layouts.app')

@section('title', 'Create Movie')

@section('main-content')
<div class="card m-5">
    <form action="{{ route('movies_user.store') }}" method="POST">
        @include('includes.movies.form')
            <div class="col-6">
                <div class="d-flex justify-content-start align-items-center">
                    <a class="btn btn-info" href="{{ route('movies_user.index') }}">Torna Indietro</a>
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