@extends ('layouts.base')
@section('docTitle')
    Home
@endsection

@section('header')
<h2 class="p-2 bg-secondary">Fumetti:</h2>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach($comic as $item)
    <div class="d-flex my-3 align-items-center justify-content-between border-bottom border-1">
        <div class="my-1">
            <h3 class="m-0 text-capitalize">{{$item -> title}}</h3>
        </div>
        <div>
            <button class="btn btn-primary"><a class="text-light" href="{{ route('comics.show', $item) }}">Vai</a></button>
            <button class="btn btn-primary"><a class="text-light" href="{{ route('comics.edit', $item) }}">Edit</a></button>
        </div>
    </div>
    @endforeach
    {{ $comic->links()}}
    </div>    
    
</div>

@endsection