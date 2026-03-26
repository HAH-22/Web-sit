@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')

    <main class="contenido-principal">
        <div class="contenedor">
            <div class="header-texto">
                <h2>Panel de Administración</h2>
                <h3>Esta sección es donde verás todos los usuarios registrados en el sitio web</h3>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h1>Usuarios</h1>
                                <a href="{{ route('user.create') }}" class="btn btn-success">+ Nuevo Usuario</a>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if($users->count())
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            32
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Correo electrónico</th>
                                                <th>Contraseña</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $usuario)
                                                <tr>
                                                    <td>{{ $usuario->id }}</td>
                                                    <td>{{ $usuario->name }}</td>
                                                    <td>{{ $usuario->email }}</td>
                                                    <td>******</td> {{-- No mostramos la contraseña real por seguridad --}}
                                                    <td>
                                                        <a href="{{ route('user.edit', $usuario->id) }}" class="btn btn-primary btn-sm">EDITAR</a>
                                                        <form method="POST" action="{{ route('user.destroy', $usuario->id) }}" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este usuario?')">ELIMINAR</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-muted">No hay usuarios registrados todavía.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection