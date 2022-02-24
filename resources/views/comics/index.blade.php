@extends ('layouts.base')
@section('docTitle')
    Home
@endsection

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col">
        <h2 class="m-0">Fumetti:</h2>
                @foreach($comic as $item)
                <div class="d-flex align-items-center justify-content-between gap-5 col-3">
                    
                    <p class="m-0">{{$item -> title}}</p>
                    <a href="{{ route('comics.show', $item) }}">Vai</a>
                    <a href="{{ route('comics.edit', $item) }}">Edit</a>
                </div>
                
        @endforeach
        </div>
        
    </div>
    {{ $comic->links()}}
</div>

@endsection