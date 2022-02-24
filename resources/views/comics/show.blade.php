@extends('layouts.base')

@section('docTitle')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row bg-dark p-3">
            <div class="col">
                <h1 class="text-light text-capitalize">{{ $comic->title }}</h1>
            </div>
        </div>
        <div class="row border-bottom border-2 p-3">
            <div class="col-12">
                <h2 class="text-dark text-capitalize">autore: {{ $comic->author }}</h2>
                <h4 class="text-dark text-capitalize">genere: {{  $comic->genre }}</h4>
            </div>
        </div>
        <div class="row border-bottom border-2 p-3 bg-info">
            <div class="col">
                <p class="text-dark">Descrizione:<br>{{ $comic->description }}</p>
            </div>
        </div>
        <div class="row border-bottom border-2 p-3">
            <div class="col">
                <h5>Prezzo: {{ $comic->price }} €</h5>
            </div>
        </div>
        <div class="p-3">
            <button class="btn btn-primary"><a class="text-light text-capitalize p-2" href="{{ route('comics.index') }}">Back</a></button>
        </div>
    </div>
@endsection