@extends('layouts.app')

@section('title', 'Edit Movie administration')

@section('main-content')
<div class="card m-5">
    <h3 class="text-center m-3">AMMINISTRATORE</h3>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row p-4">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo Film</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo Film" name="title">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Imaggine Film</label>
                    <input type="url" class="form-control" id="thumb" placeholder="Immagine Film" name="thumb">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo Film</label>
                    <input type="text" class="form-control" id="price" placeholder="Prezzo Film" name="price">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie Film</label>
                    <input type="text" class="form-control" id="series" placeholder="Serie Film" name="series">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Film</label>
                    <input type="date" class="form-control" id="sale_date" placeholder="Data Film" name="sale_date">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo Film</label>
                    <input type="text" class="form-control" id="type" placeholder="Tipo Film" name="type">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti Film</label>
                    <input type="text" class="form-control" id="artists" placeholder="Artisti Film" name="artists">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori Film</label>
                    <input type="text" class="form-control" id="writers" placeholder="Scrittori Film" name="writers">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione Film</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-info">Salva Film</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
