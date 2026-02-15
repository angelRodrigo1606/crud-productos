@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Editar Producto</h1>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('productos.update', $producto) }}" method="POST">
                @csrf
                @method('PUT')
                @include('productos._form')
                <button type="submit" class="btn btn-warning mt-3">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
