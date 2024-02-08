@extends('plantilla')

@section('cabecera','Listado Posts')
@section('contenido')
    <div class="container">
        <h1 class="display-4 mt-2">Página de Posts</h1>
    </div>

    <div class="container mt-3">
        <div class="row">
            @forelse($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->titulo }}</h2>
                            <p class="card-text">{{ $post->contenido }}</p>
                            <p class="card-text">{{ $post->usuario->login }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Mostrar post</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-warning" role="alert">
                        <h2>Sin autores Encontrados</h2>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    {{ $posts->links() }}

@endsection

