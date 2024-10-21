@extends('layouts.app')

@section('titulo', 'Pagina principal')

@section('contenido')

@section('contenido')
<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($productos as $producto)
        <div class="card bg-base-100 w-96 shadow-xl">
            <figure>
                <img src="https://picsum.photos/id/{{ $producto->id }}/240" alt="{{ $producto->nombre }}"/>
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Comprar Ahora</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

