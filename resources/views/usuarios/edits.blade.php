@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Editar Usuario</h2>
            <h3>Modifica los datos del usuario registrado</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña (dejar vacío para mantener)</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="is_admin" class="form-label">Permisos de Administrador</label>
                                <select name="is_admin" id="is_admin" class="form-control">
                                    <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Sí</option>
                                </select>
                                @error('is_admin') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-editar">Actualizar Usuario</button>
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