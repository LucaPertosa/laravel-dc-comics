@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-success my-3">Torna alla lista</a>
        <h2 class="text-center">Dettagli fumetto</h2>
        <div class="card w-50 m-auto" >
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $comic->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center"><strong>{{ $comic->series }}, {{$comic->sale_date}}</strong></h6>
                <h6 class="card-subtitle mb-2 text-muted text-center"><strong>Tipologia: </strong>{{ $comic->type }}</h6>
                <p class="card-text"> <strong>Descrizione del fumetto:</strong> {{ $comic->description }}</p>
                <p class="card-text"> <strong>Prezzo:</strong> {{ $comic->price }}</p>
            </div>
        </div>
    </div>
@endsection
