@extends('layouts.app')

@section('title', 'trash')

@section('main-content')
    <div class="card m-3">
        <div class="card-title text-center">
            <h1>Cestino</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr scope="col">
                        <th>Elementi cestinati</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td scope="row">
                                <img src="{{ $movie->thumb }}" alt="{{ $movie->title }}" width="50">
                                <span class="ml-2">{{ $movie->title }}</span>
                            </td>
                            <td>
                                <div class="d-flex justify-content-end gap-2 mt-3">
                                    <a href="{{ route('movies.show', $movie->id) }}"
                                        class="text-white btn btn-primary text-decoration-none">
                                        Vedi
                                    </a>
                                    <a class="text-white btn btn-warning text-decoration-none"
                                        href="{{ route('movies.edit', $movie->id) }}">
                                        Modifica
                                    </a>
                                    <form action="{{ route('movies.restore', $movie->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="text-white btn btn-success text-uppercase">ripristina</button>
                                    </form>
                                    <form action="{{ route('movies.drop', $movie->id) }}" method="POST" id="drop-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-white btn btn-danger text-uppercase">elimina</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>
        const dropForm = document.getElementById('drop-form')

        dropForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const confirmDrop = confirm('Sei sicuro di volor eliminare definitivamente {{ $movie->title }}')

            if (confirmDrop) {
                dropForm.submit();
            }
        })
    </script>
@endsection
