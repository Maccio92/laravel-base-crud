@extends('layouts.base')

@section('docTitle')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col">
                <h1 class="text-light text-capitalize">{{ $comic->title }}</h1>
            </div>
        </div>
        <div class="row bg-secondary">
            <div class="col-12">
                <h2 class="text-dark text-capitalize">autore: {{ $comic->author }}</h2>
                <h3 class="text-dark text-capitalize">genere: {{  $comic->genre }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Descrizione:<br>{{ $comic->description }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Prezzo:{{  $comic->price }} €</h5>
            </div>
        </div>
            <button class="btn btn-primary"><a class="text-light text-capitalize" href="{{ route('comics.index') }}">Back</a></button>
    </div>
@endsection