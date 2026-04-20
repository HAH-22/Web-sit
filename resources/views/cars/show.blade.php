@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Detalles del Carro</h2>
            <h3>Información completa del vehículo</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <!-- Nombre del carro (marca + modelo) destacado -->
                        <h1 class="display-6 fw-bold texto-centrado mb-4">{{ $car->marca }} {{ $car->modelo }}</h1>

                        <!-- Año y precio -->
                        <div class="texto-centrado mb-4">
                            <p class="fs-4"><strong>Año:</strong> {{ $car->anio }}</p>
                            <p class="fs-4 text-success"><strong>Precio:</strong> ${{ number_format($car->precio, 2) }}</p>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-4">
                            <h4 class="texto-centrado">Descripción</h4>
                            <p class="text-justify mt-2">{{ $car->descripcion ?? 'Sin descripción disponible.' }}</p>
                        </div>

                        <!-- Imagen (si existe) -->
                        @if($car->imagen)
                        <div class="texto-centrado mb-5">
                            <img src="{{ asset('storage/' . $car->imagen) }}" alt="{{ $car->marca }} {{ $car->modelo }}" class="img-fluid rounded shadow" style="max-height: 300px;">
                        </div>
                        @endif

                        <!-- Botones -->
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            @if(Auth::check() && Auth::user()->is_admin)
                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-editar">Editar</a>
                                <a href="{{ route('cars.index') }}" class="btn btn-secondary">Volver al listado</a>
                            @endif
                            <a href="{{ route('pago') }}" class="btn btn-crear">Comprar ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection