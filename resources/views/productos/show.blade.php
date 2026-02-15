@extends('layouts.app')

@section('title', 'Detalle del Producto')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>{{ $producto->nombre }}</h1>
        <div>
            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $producto->id }}</dd>

                <dt class="col-sm-3">Nombre</dt>
                <dd class="col-sm-9">{{ $producto->nombre }}</dd>

                <dt class="col-sm-3">Cantidad</dt>
                <dd class="col-sm-9">{{ $producto->cantidad }}</dd>

                <dt class="col-sm-3">Precio</dt>
                <dd class="col-sm-9">${{ number_format($producto->precio, 2) }}</dd>

                <dt class="col-sm-3">Calidad</dt>
                <dd class="col-sm-9">{{ $producto->calidad }}</dd>

                <dt class="col-sm-3">Descripcion</dt>
                <dd class="col-sm-9">{{ $producto->descripcion }}</dd>
            </dl>
        </div>
    </div>
@endsection
