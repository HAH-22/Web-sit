@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Editar Carro</h2>
            <h3>Modifica los datos del vehículo</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control" value="{{ old('marca', $car->marca) }}" required>
                                @error('marca') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ old('modelo', $car->modelo) }}" required>
                                @error('modelo') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="anio" class="form-label">Año</label>
                                <input type="number" name="anio" id="anio" class="form-control" value="{{ old('anio', $car->anio) }}" required>
                                @error('anio') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio (USD)</label>
                                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio', $car->precio) }}" required>
                                @error('precio') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{ old('descripcion', $car->descripcion) }}</textarea>
                                @error('descripcion') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen (dejar vacío para mantener la actual)</label>
                                <input type="file" name="imagen" id="imagen" class="form-control">
                                @if($car->imagen)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $car->imagen) }}" alt="Imagen actual" style="max-width: 150px; border-radius: 8px;">
                                        <p class="text-muted mt-1">Imagen actual</p>
                                    </div>
                                @endif
                                @error('imagen') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-editar">Actualizar Carro</button>
                                <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection