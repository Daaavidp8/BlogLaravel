@extends('plantilla')

@section('cabecera','Ficha Post')
@section('contenido')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-8"> <!-- Colocamos la tarjeta dentro de una columna que ocupa 8 columnas en pantallas grandes -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title display-4">{{$post->titulo}}</h2>
                        <p style="font-size: 1.5em;">{{ $post->contenido }}</p>
                        <p style="font-size: 1.2em;">{{ $post->usuario->login  }}</p>
                        <p class="small">{{ $post->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

