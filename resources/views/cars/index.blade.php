@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Gestión de Carros</h2>
            <h3>Aquí puedes administrar todos los vehículos disponibles en el sitio</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1>Carros</h1>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($cars->count())
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Año</th>
                                            <th>Precio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cars as $car)
                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->marca }}</td>
                                            <td>{{ $car->modelo }}</td>
                                            <td>{{ $car->anio }}</td>
                                            <td>${{ number_format($car->precio, 2) }}</td>
                                            <td>
                                                <a href="{{ route('cars.show', $car->id) }}" class="btn btn-ver btn-sm">Ver</a>
                                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-editar btn-sm">Editar</a>
                                                <form method="POST" action="{{ route('cars.destroy', $car->id) }}" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-eliminar btn-sm" onclick="return confirm('¿Eliminar este carro?')">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('cars.create') }}" class="btn btn-crear btn-sm">+ Nuevo Carro</a>
                        @else
                            <p class="text-muted">No hay carros registrados todavía.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection