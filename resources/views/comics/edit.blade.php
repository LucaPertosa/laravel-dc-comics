@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Modifica il fumetto</h2>

        <a href="{{ route('comics.index') }}" class="btn btn-success my-3">Torna alla lista</a>

        <form action="{{ route('comics.update', $comics->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comics->title}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comics->thumb}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select">
                    <option selected>Seleziona</option>
                    <option @selected($comics->type === 'comic book') value="comic book">Comic Book</option>
                    <option @selected($comics->type === 'graphic novel') value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comics->price}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comics->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comics->series}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{$comics->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Invia</button>

        </form>
    </div>
@endsection
