@extends('layouts.app')

@section('title', 'Nuevo Producto')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Nuevo Producto</h1>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                @include('productos._form')
                <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection
