@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('comics.index') }}">Torna indietro</a> {{-- Grazie stefano --}}
        <h2 class="text-center">Dettagli fumetto</h2>
        <div class="card w-50 m-auto" >
            <img src="{{ $comics->thumb }}" class="card-img-top" alt="{{ $comics->title }}">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $comics->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center"><strong>{{ $comics->series }}, {{$comics->sale_date}}</strong></h6>
                <h6 class="card-subtitle mb-2 text-muted text-center"><strong>Tipologia: </strong>{{ $comics->type }}</h6>
                <p class="card-text"> <strong>Descrizione del fumetto:</strong> {{ $comics->description }}</p>
                <p class="card-text"> <strong>Prezzo:</strong> {{ $comics->price }} €</p>
            </div>
        </div>
    </div>
@endsection
