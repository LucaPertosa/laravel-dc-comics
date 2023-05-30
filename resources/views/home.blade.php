@extends('layouts.app')

@section('content')
    <h2 class="text-center">Home page</h2>
    <div class="text-center m-5">
        <a href="{{ route('comics.index') }}" class="btn btn-success">Visualizza la lista dei fumetti</a>
    </div>
@endsection