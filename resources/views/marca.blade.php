@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Marcas disponibles</h2>
            <h3>Listado de todas las marcas de vehículos en nuestro catálogo</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h1 class="mb-4">Marcas</h1>

                        @if($marcas->count())
                            <div class="row">
                                @foreach($marcas as $marca)
                                    <div class="col-md-3 col-sm-6 mb-4">
                                        <div class="card h-100 text-center">
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $marca->marca }}</h4>
                                                <p class="card-text">Modelos disponibles en esta marca.</p>
                                                <!-- Opcional: enlace para filtrar por marca -->
                                                <a href="{{ url('/?marca=' . $marca->marca) }}" class="btn btn-sm btn-editar">Ver carros</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-muted">No hay marcas registradas todavía.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection