@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Tutti i nostri fumetti</h2>
        <div class="my-3 text-end">
            <a href="{{ route('comics.create') }}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Inserisci un nuovo fumetto 
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('comics.show', $comic->id)}}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection