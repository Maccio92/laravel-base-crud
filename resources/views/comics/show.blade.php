@extends('layouts.base')

@section('docTitle')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>{{ $comic->author }}</h2>
                <h2>{{  $comic->genre }}</h2>
            </div>
            <div class="col">
                <h3>{{ $comic->description }}</h3>
            </div>
            <div class="col">
                <h2>{{  $comic->price }} €</h2>
            </div>
        </div>
    </div>
@endsection