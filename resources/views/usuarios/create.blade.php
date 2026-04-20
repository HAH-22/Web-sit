@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Crear Usuario</h2>
            <h3>Registra un nuevo usuario en el sistema</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-crear">Guardar Usuario</button>
                                <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection