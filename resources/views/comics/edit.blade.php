@extends ('layouts.base')
@section('docTitle')
{{$comic->title}}
@endsection
@section('content')
<div class="container">
        <div class="row">
            <form action="{{ route('comics.update', $comic->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}">
                    @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genere</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ $comic->genre }}">
                    @error('genre')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
                    @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
@endsection