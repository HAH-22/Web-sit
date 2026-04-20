@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

@section('content')
<main class="contenido-principal">
    <div class="contenedor">
        <div class="header-texto">
            <h2>Panel de inicio</h2>
            <h3>Bienvenido al sistema de gestión de vehículos</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Tarjeta de bienvenida -->
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-body p-5">
                        <h1>¡Bienvenido, {{ Auth::user()->name }}!</h1>
                        <p class="lead">Este es el panel de inicio del sitio web.</p>
                    </div>
                </div>

                <!-- Tarjeta de descripción del funcionamiento -->
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2>¿Cómo funciona esta página?</h2>
                        <div class="row mt-4">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h4>🏠 El botón de inicio</h4>
                                        <p>Te muestra todos los carros que hay disponibles en el catálogo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h4>🏷️ El botón marcas</h4>
                                        <p>Te muestra las marcas de carros que hay disponibles para filtrar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h4>📞 El botón de contacto</h4>
                                        <p>Te muestra un formulario para que puedas contactarnos fácilmente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h4>👤 El botón de perfil</h4>
                                        <p>Te permite gestionar tu información personal y preferencias de cuenta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(Auth::user()->is_admin ?? false)
                        <div class="text-center mt-4">
                            <a href="{{ route('admin.index') }}" class="btn">Ir al panel de administración</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection